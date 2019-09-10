import Vuex from 'vuex'
import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import { getField, updateField } from 'vuex-map-fields';

Vue.use(Vuex)

export default new Vuex.Store({
    state: { // = data
        record:{},
        record_id: null,
        isNewRecord: null,
        endpoint: null,
        loading: null,
        recordLoadState: null,
        formInput:{},
        hasUnsavedChanges: false,
        test:'Hello World!',
    },

    actions: { // = methods
        selectRecord ({ commit }, id) {
            commit('SET_RECORD_ID', id)
        },
        loadRecord ({ commit }, [endpoint, id]) {
              commit('SET_LOADING_STATE', true)
              axios
                .get('/admin-api/' + endpoint + '/' + id)
                .then(r => r.data)
                .then(record => {
                commit('SET_RECORD', record)
                commit('EMPTY_FORM_INPUT_FIELD')
                commit('SET_LOADING_STATE', false)
                commit('SET_UNSAVED_CHANGES',false)
                commit('SET_RECORD_ENDPOINT',endpoint)
                commit('SET_IS_NEW_RECORD',false)
                })
        },
        prepNewRecord({commit}, endpoint){
                commit('SET_LOADING_STATE', true)
                axios
                    .get('/admin-api/' + endpoint + '/fields')
                    .then(r => r.data)
                    .then(record => {
                    commit('SET_RECORD', record)
                    commit('EMPTY_FORM_INPUT_FIELD')
                    commit('SET_UNSAVED_CHANGES',false)
                    commit('SET_RECORD_ENDPOINT',endpoint)
                    commit('SET_IS_NEW_RECORD',true)
                    commit('SET_LOADING_STATE', false)
                    })
        },
        updateRecord({ commit }, [field, value]) {
            commit('UPDATE_RECORD_FIELD', [field, value])
            commit('UPDATE_FORM_INPUT_FIELD', [field, value])
            commit('SET_UNSAVED_CHANGES',true)
        },
        cancelUpdate({ commit, state }) {
            commit('SET_LOADING_STATE', true)
            axios
                .get('/admin-api/' + state.endpoint + '/' + state.record_id)
                .then(r => r.data)
                .then(record => {
                commit('SET_RECORD', record)
                commit('EMPTY_FORM_INPUT_FIELD')
                commit('SET_LOADING_STATE', false)
                commit('SET_UNSAVED_CHANGES',false)
                })
        },
        cancelNewRecord({commit, state}) {
                commit('SET_IS_NEW_RECORD',false)
                commit('EMPTY_FORM_INPUT_FIELD')
        },
        storeChanges({state, commit}){
            axios
                .patch('/admin-api/' + state.endpoint + '/' + state.record_id, state.formInput)
                .then(record => {
                commit('EMPTY_FORM_INPUT_FIELD')
                commit('SET_UNSAVED_CHANGES',false)
                })
        },
        storeNewRecord({state, commit}){
            axios
                .post('/admin-api/' + state.endpoint, state.formInput)
                .then(r => r.data)
                .then(record => {
                commit('EMPTY_FORM_INPUT_FIELD')
                commit('SET_IS_NEW_RECORD',false)
                commit('SET_UNSAVED_CHANGES',false)
                })
        }
    },

    mutations: {
        SET_RECORD (state, record){
            state.record = record
            state.record_id = record.id
        },
        SET_RECORD_ID (state, id){
            state.record_id = id
        },
        SET_IS_NEW_RECORD (state, value){
            state.isNewRecord = value
        },
        SET_LOADING_STATE (state, boolean){
            state.loading = boolean
        },
        SET_RECORD_ENDPOINT (state, endpoint){
            state.endpoint = endpoint
        },
        RESET_RECORD (state){
            state.record = state.recordLoadState
        },
        UPDATE_RECORD_FIELD (state, [field, value]){
            state.record[field] = value
        },
        UPDATE_FORM_INPUT_FIELD (state, [field, value]){
            state.formInput[field] = value
        },
        EMPTY_FORM_INPUT_FIELD (state){
            state.formInput = {}
        },
        SET_UNSAVED_CHANGES (state, value){
            state.hasUnsavedChanges = value
        },
        ADD_PHOTOGRAPH_ID_TO_FORM_DATA (state, value){
            state.formInput.photograph_id = value
        }
    },
})

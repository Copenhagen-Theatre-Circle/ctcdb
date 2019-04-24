@extends('layouts.app')

@section('content')
    <div class="container" id="app">
          <br>
          <!-- Top Hero -->

          <br>

          <br>
          <!-- Calendar -->
          <section>
            <div class="hero is-transparent">
              <h1 class="title is-size-3 has-text-white" style="padding-left: 10px;">Calendar</h1>
            </div>
          </section>
          <br>

          <div class="columns is-multiline">

          @foreach ($events as $event)

          <div class="column is-half-tablet is-one-third-desktop">
            <transition name="flip">
              <div @click="toggleCard" v-if="!flipped" class="card" key="front">
                <header class="card-header has-background-dark">
                  <div class="columns is-mobile" style="width: 100%;">
                    <div class="column">
                      <p class="card-header-title has-text-white">
                        {{$event->name}}
                      </p>
                    </div>
                    <div class="column is-narrow">
                      <div style="padding-top: 10px; padding-bottom: 10px;">
                        <div class="is-size-7 has-text-white">Thu</div>
                        <div class="is-size-6 has-text-white">4 Mar</div>
                        <div class="is-size-7 has-text-white">{{$event->time}}</div>
                      </div>
                    </div>
                  </div>
                </header>
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://res.cloudinary.com/ctcircle/image/fetch/h_960,w_1280,c_fill/{{$event->image}}" alt="Placeholder image">
                  </figure>
                </div>
              </div>
              <div @click="toggleCard" v-else class="card" key="back">
                <header class="card-header has-background-dark">
                  <div class="columns is-mobile" style="width: 100%;">
                    <div class="column">
                      <div class="card-header-title has-text-white">
                        {{$event->name}}
                      </div>
                      <p class="card-header-title is-size-7 has-text-white">
                        {{$event->location}}
                      </p>
                    </div>
                    <div class="column is-narrow">
                      <div style="padding-top: 10px; padding-bottom: 10px;">
                        <div class="is-size-7 has-text-white">Thu</div>
                        <div class="is-size-6 has-text-white">4 Mar</div>
                        <div class="is-size-7 has-text-white">{{$event->time}}</div>
                      </div>
                    </div>
                  </div>
                </header>
                <div class="card-content">
                  <div class="content">
                    {{$event->description}}
                  </div>
                </div>
                <footer class="card-footer">
                  <a href="http://ctcircle.dk" class="card-footer-item">More Info</a>
                  <a href="#" class="card-footer-item">Buy Tickets!</a>
                  <!-- <a href="#" class="card-footer-item">Delete</a> -->
                </footer>
              </div>
            </transition>

          </div>

          @endforeach

          </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        new Vue({
        el: '#app',
        data: {
            flipped: false
        },
        methods: {
          toggleCard: function(){
            this.flipped = !this.flipped;
          }
        }
      });
    </script>
@endsection

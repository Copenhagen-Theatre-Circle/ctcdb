<template>
    <base-layout title="History">
        <section class="section">
            <base-breadcrumb>
                <li><a href="../../../">Home</a></li>
                <li><a href="../../history">History</a></li>
                <li><a href="../shows">Shows</a></li>
                <li class="is-active"><a href="#">{{project.name}}</a></li>
            </base-breadcrumb>
            <hr>
            <div class="columns">
                <div class="column is-3">
                    <div class="fixie" style="position: fixed; width: 18%;">
                        <aside class="menu">
                            <scrollactive :offset="350">
                              <ul class="menu-list">
                                <li><a href="#part1" class="scrollactive-item is-active">Part 1</a></li>
                                <li><a href="#part2" class="scrollactive-item" style="display:none;">Part 2</a></li>
                                <li><a href="#part3" class="scrollactive-item" style="display:none;">Part 3</a></li>
                              </ul>
                            </scrollactive>
                            <scrollactive :offset="150">
                              <ul class="menu-list">
                                <li><a href="#part1" class="scrollactive-item" style="display:none">Part 1</a></li>
                                <li><a href="#part2" class="scrollactive-item">Part 2</a></li>
                                <li><a href="#part3" class="scrollactive-item">Part 3</a></li>
                              </ul>
                            </scrollactive>
                        </aside>
                    </div>
                </div>
                <!-- <div class="column is-3"></div> -->
                <div class="column showcontent">
                    <h1 class="title" id="part1">Part 1</h1>
                    <lorem-ipsum></lorem-ipsum>
                    <h1 class="title" id="part2">Part 2</h1>
                    <lorem-ipsum></lorem-ipsum>
                    <h1 class="title" id="part3">Part 3</h1>
                    <lorem-ipsum></lorem-ipsum>
                </div>
            </div>
        </section>
    </base-layout>
</template>
<script>
  export default {
    props:['project']
  }
</script>
<style scoped>
    .section {
        margin-top: 10px;
        padding-top: 20px;
        padding-bottom: 350px;
        margin-bottom: 40px;
    }
    .showcontent {
        /*max-height: 350px;
        overflow: scroll !important;*/
    }
    hr {
        background-color: lightgrey;
        height: 1px;
    }
    section {
      background: linear-gradient( rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4) );
      padding-top: 1rem;
      margin-top: 1rem;
    }
</style>

<template>
                <div v-bind:class="defineCor">
                    <div v-if="titulo" class="panel-heading">{{titulo}}</div>

                    <div class="panel-body">
                        <slot></slot>
                    </div>
                </div>
</template>

<script>
    export default {
      props:['titulo', 'cor'],
      computed:{
        defineCor: function(){
          return "panel "+ (this.cor || "panel-default");
        }
      }
    }
</script>

<style media="screen">
  .blue {
    border-color: #080eb1;
  }
  .blue > .panel-heading {
      color: #ffffff;
      background-color: #080eb1;
      border-color: #080eb1;
  }
</style>

<template>
  <div v-if="Object.keys(next_event).length">
    <div class="gc_upcoming_event_main_wrapper">
      <div class="gc_upcoming_event_left_wrapper">
        <div class="gc_event_icon_wrapper">
          <img :src="asset + 'images/header/event_icon.png'" alt="icon" />
        </div>

        <div class="gc_index2_event_heading_wrapper">
          <h3 class="d-none hidden">Next Upcoming Event</h3>
          <h3>{{ next_event.timeable.title }}</h3>
        </div>

        <div
          class="gc_event_heading_cont_wrapper d-block"
          v-if="next_event.title !== next_event.timeable.title"
        >
          <h4>{{ next_event.title }}</h4>
        </div>

        <div class="gc_event_heading_cont_time_wrapper d-block" style="clear: both">
          <p><i class="fa fa-calendar"></i> {{ next_event.started_date }}</p>
          <p class="event_time">
            <i class="fa fa-clock-o"></i>
            @ {{ next_event.started_time }} to {{ next_event.ended_time }}
          </p>
        </div>
      </div>
    </div>

    <div class="gc_upcoming_event_timer_main_wrapper">
      <div class="gc_upcoming_event_timer_wrapper">
        <div id="clockdiv">
          <div>
            <span class="days"></span>
            <div class="smalltext">Days</div>
          </div>
          <div>
            <span class="hours"></span>
            <div class="smalltext">hrs</div>
          </div>
          <div>
            <span class="minutes"></span>
            <div class="smalltext">Min</div>
          </div>
          <div>
            <span class="seconds"></span>
            <div class="smalltext">Sec</div>
          </div>
        </div>
        <div class="gc_event_timer_btn">
          <ul>
            <li><a href="#">JOIN US!</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: {},

  data() {
    return {
      asset: this.$page.props.app.asset + '/guest/',
      next_event: Object
    };
  },
  mounted() {
    axios
      .get(route('api.event.next'))
      .then((response) => (this.next_event = response.data.next_event));
  }
};
</script>

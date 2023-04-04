import { createApp, reactive } from "/packages/svj/svj_theme/js/petite_vue.js";

const store = reactive({
    supervisorTags: supervisorTags,
    selectedSupervisorTags: [],
    supervisors: supervisors
});

const SupervisorTagFilter = function () {
    return {
        $template: "#supervisor-tag-filter-template"
    };
}

const SupervisorCarousel = function () {
    return {
        $template: "#supervisor-carousel-supervisors"
    };
}

createApp({
    SupervisorTagFilter,
    SupervisorCarousel,
    store
}).mount();
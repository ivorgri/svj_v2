import { createApp, reactive } from "https://unpkg.com/petite-vue?module";

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
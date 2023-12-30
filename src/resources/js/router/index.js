import { createRouter, createWebHistory } from "vue-router";
import AboutView from "../views/About.vue";
import AttendanceList from "../components/AttendanceList.vue"

const router = createRouter({
    history: createWebHistory(import.meta.env.APP_URL),
    routes: [
        {
            path: "/",
            name: "attendances-list",
            component: AttendanceList,
        },
        {
            path: "/about",
            name: "about",
            component: AboutView,
        },
    ],
});

export default router;
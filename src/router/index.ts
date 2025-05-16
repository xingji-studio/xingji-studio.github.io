import Home from "../views/Home.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: Home,
  },
  {
    path: "/os/xj380",
    name: "xj380",
    component: () => import("../views/os/XJ380.vue"),
  },
  {
    path: "/os/xj380/download",
    name: "xj380-download",
    component: () => import("../views/os/XJ380Download.vue"),
  },
  {
    path: "/os/xj380/error",
    name: "xj380-error",
    component: () => import("../views/os/XJ380Error.vue"),
  },
  {
    path: "/software",
    name: "software",
    component: () => import("../views/software/Software.vue"),
  },
  {
    path: "/software/games/bcms",
    name: "bcms",
    component: () => import("../views/software/games/BCMS.vue"),
  },
  {
    path: "/open-source",
    name: "open-source",
    component: () => import("../views/OpenSource.vue"),
  },
  {
    path: "/about",
    name: "about",
    component: () => import("../views/about/About.vue"),
  },
  {
    path: "/join",
    name: "join",
    component: () => import("../views/about/Join.vue"),
  },
  {
    path: "/news/2025031501",
    name: "news2025031501",
    component: () => import("../views/news/news2025031501.vue"),
  },
  {
    path: "/news/2025032201",
    name: "news2025032201",
    component: () => import("../views/news/news2025032201.vue"),
  },
];

// const router = createRouter({
//   history: createWebHashHistory(),
//   routes
// })

export default routes;

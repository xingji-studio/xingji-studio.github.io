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
    path: "/business",
    name: "business",
    component: () => import("../views/business/Business.vue"),
  },
  {
    path: "/business/oem",
    name: "oem",
    component: () => import("../views/business/Outsourcing.vue"),
  },
  {
    path: "/business/ads",
    name: "ads",
    component: () => import("../views/business/Ads.vue"),
  },
  {
    path: "/business/cooperation",
    name: "cooperation",
    component: () => import("../views/business/Cooperation.vue"),
  },
  {
    path: "/business/cooperation/tech",
    name: "tech-cooperation",
    component: () => import("../views/business/TechCooperation.vue"),
  },
  {
    path: "/business/cooperation/reseller",
    name: "reseller",
    component: () => import("../views/business/Reseller.vue"),
  },
  {
    path: "/business/cooperation/bulk",
    name: "bulk-purchase",
    component: () => import("../views/business/BulkPurchase.vue"),
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
];

// const router = createRouter({
//   history: createWebHashHistory(),
//   routes
// })

export default routes;

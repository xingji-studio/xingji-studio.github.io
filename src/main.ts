import App from "./App.vue";
import routes from "./router";
import { ViteSSG } from "vite-ssg";
import "./style.css";

export const createApp = ViteSSG(App, { routes }, (_ctx) => {
//   ctx.router.beforeEach((to, _from, next) => {
//     const { title, description } = to.meta;
//     const defaultTitle = "Default Title";
//     const defaultDescription = "Default Description";
//     if (typeof window !== "undefined") {
//       document.title = typeof title === "string" ? title : defaultTitle;

//       const descriptionElement = document.querySelector(
//         'head meta[name="description"]'
//       );

//       descriptionElement?.setAttribute(
//         "content",
//         typeof description === "string" ? description : defaultDescription
//       );
//     }
//     next();
//   });
});

// const app = createApp(App)
// app.use(router)
// app.mount('#app')

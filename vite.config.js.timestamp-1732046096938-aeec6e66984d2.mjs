// vite.config.js
import { defineConfig } from "file:///C:/laragon/www/wagner/sabonetenatural/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/laragon/www/wagner/sabonetenatural/node_modules/laravel-vite-plugin/dist/index.js";
import { viteStaticCopy } from "file:///C:/laragon/www/wagner/sabonetenatural/node_modules/vite-plugin-static-copy/dist/index.js";
import vue from "file:///C:/laragon/www/wagner/sabonetenatural/node_modules/@vitejs/plugin-vue/dist/index.mjs";
import path from "path";
var __vite_injected_original_dirname = "C:\\laragon\\www\\wagner\\sabonetenatural";
var vite_config_default = defineConfig({
  plugins: [
    vue(),
    laravel({
      input: ["resources/css/app.css", "resources/js/app.js"],
      refresh: true
    }),
    viteStaticCopy({
      targets: [
        {
          src: "resources/assets/admin/css",
          dest: "admin"
        },
        {
          src: "resources/assets/admin/data",
          dest: "admin"
        },
        {
          src: "resources/assets/admin/fonts",
          dest: "admin"
        },
        {
          src: "resources/assets/admin/images",
          dest: "admin"
        },
        {
          src: "resources/assets/admin/js",
          dest: "admin"
        },
        {
          src: "resources/assets/client/images",
          dest: "client"
        }
      ]
    })
  ],
  resolve: {
    alias: {
      vue: "vue/dist/vue.esm-bundler.js",
      "@": path.resolve(__vite_injected_original_dirname, "resources/js")
    }
  },
  server: {
    host: "127.0.0.1",
    port: 5173,
    strictPort: true
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFx3YWduZXJcXFxcc2Fib25ldGVuYXR1cmFsXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ZpbGVuYW1lID0gXCJDOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFx3YWduZXJcXFxcc2Fib25ldGVuYXR1cmFsXFxcXHZpdGUuY29uZmlnLmpzXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ltcG9ydF9tZXRhX3VybCA9IFwiZmlsZTovLy9DOi9sYXJhZ29uL3d3dy93YWduZXIvc2Fib25ldGVuYXR1cmFsL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcbmltcG9ydCB7IHZpdGVTdGF0aWNDb3B5IH0gZnJvbSAndml0ZS1wbHVnaW4tc3RhdGljLWNvcHknO1xuaW1wb3J0IHZ1ZSBmcm9tICdAdml0ZWpzL3BsdWdpbi12dWUnO1xuaW1wb3J0IHBhdGggZnJvbSAncGF0aCc7XG5cbmV4cG9ydCBkZWZhdWx0IGRlZmluZUNvbmZpZyh7XG4gICAgcGx1Z2luczogW1xuICAgICAgICB2dWUoKSxcbiAgICAgICAgbGFyYXZlbCh7XG4gICAgICAgICAgICBpbnB1dDogWydyZXNvdXJjZXMvY3NzL2FwcC5jc3MnLCAncmVzb3VyY2VzL2pzL2FwcC5qcyddLFxuICAgICAgICAgICAgcmVmcmVzaDogdHJ1ZSxcbiAgICAgICAgfSksXG5cbiAgICAgICAgdml0ZVN0YXRpY0NvcHkoe1xuICAgICAgICAgICAgdGFyZ2V0czogW1xuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgc3JjOiAncmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9jc3MnLFxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnYWRtaW4nXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgIHNyYzogJ3Jlc291cmNlcy9hc3NldHMvYWRtaW4vZGF0YScsXG4gICAgICAgICAgICAgICAgICAgIGRlc3Q6ICdhZG1pbidcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgc3JjOiAncmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9mb250cycsXG4gICAgICAgICAgICAgICAgICAgIGRlc3Q6ICdhZG1pbidcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgc3JjOiAncmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9pbWFnZXMnLFxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnYWRtaW4nXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgIHNyYzogJ3Jlc291cmNlcy9hc3NldHMvYWRtaW4vanMnLFxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnYWRtaW4nXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgIHNyYzogJ3Jlc291cmNlcy9hc3NldHMvY2xpZW50L2ltYWdlcycsXG4gICAgICAgICAgICAgICAgICAgIGRlc3Q6ICdjbGllbnQnXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIF1cbiAgICAgICAgfSlcbiAgICBdLFxuICAgIHJlc29sdmU6e1xuICAgICAgICBhbGlhczp7XG4gICAgICAgICAgICB2dWU6J3Z1ZS9kaXN0L3Z1ZS5lc20tYnVuZGxlci5qcycsXG4gICAgICAgICAgICAnQCc6IHBhdGgucmVzb2x2ZShfX2Rpcm5hbWUsICdyZXNvdXJjZXMvanMnKSwgICAgICAgICAgICAgXG4gICAgICAgIH1cbiAgICB9LFxuICAgIHNlcnZlcjoge1xuICAgICAgICBob3N0OiAnMTI3LjAuMC4xJyxcbiAgICAgICAgcG9ydDogNTE3MyxcbiAgICAgICAgc3RyaWN0UG9ydDogdHJ1ZSxcbiAgICB9LFxufSk7XG4iXSwKICAibWFwcGluZ3MiOiAiO0FBQTJTLFNBQVMsb0JBQW9CO0FBQ3hVLE9BQU8sYUFBYTtBQUNwQixTQUFTLHNCQUFzQjtBQUMvQixPQUFPLFNBQVM7QUFDaEIsT0FBTyxVQUFVO0FBSmpCLElBQU0sbUNBQW1DO0FBTXpDLElBQU8sc0JBQVEsYUFBYTtBQUFBLEVBQ3hCLFNBQVM7QUFBQSxJQUNMLElBQUk7QUFBQSxJQUNKLFFBQVE7QUFBQSxNQUNKLE9BQU8sQ0FBQyx5QkFBeUIscUJBQXFCO0FBQUEsTUFDdEQsU0FBUztBQUFBLElBQ2IsQ0FBQztBQUFBLElBRUQsZUFBZTtBQUFBLE1BQ1gsU0FBUztBQUFBLFFBQ0w7QUFBQSxVQUNJLEtBQUs7QUFBQSxVQUNMLE1BQU07QUFBQSxRQUNWO0FBQUEsUUFDQTtBQUFBLFVBQ0ksS0FBSztBQUFBLFVBQ0wsTUFBTTtBQUFBLFFBQ1Y7QUFBQSxRQUNBO0FBQUEsVUFDSSxLQUFLO0FBQUEsVUFDTCxNQUFNO0FBQUEsUUFDVjtBQUFBLFFBQ0E7QUFBQSxVQUNJLEtBQUs7QUFBQSxVQUNMLE1BQU07QUFBQSxRQUNWO0FBQUEsUUFDQTtBQUFBLFVBQ0ksS0FBSztBQUFBLFVBQ0wsTUFBTTtBQUFBLFFBQ1Y7QUFBQSxRQUNBO0FBQUEsVUFDSSxLQUFLO0FBQUEsVUFDTCxNQUFNO0FBQUEsUUFDVjtBQUFBLE1BQ0o7QUFBQSxJQUNKLENBQUM7QUFBQSxFQUNMO0FBQUEsRUFDQSxTQUFRO0FBQUEsSUFDSixPQUFNO0FBQUEsTUFDRixLQUFJO0FBQUEsTUFDSixLQUFLLEtBQUssUUFBUSxrQ0FBVyxjQUFjO0FBQUEsSUFDL0M7QUFBQSxFQUNKO0FBQUEsRUFDQSxRQUFRO0FBQUEsSUFDSixNQUFNO0FBQUEsSUFDTixNQUFNO0FBQUEsSUFDTixZQUFZO0FBQUEsRUFDaEI7QUFDSixDQUFDOyIsCiAgIm5hbWVzIjogW10KfQo=

import { createRouter, createWebHistory } from 'vue-router'
import Layout from '../views/Layout.vue'

const routes = [
  {
    path: '/',
    component: Layout, // Aquí usamos el layout como componente principal para todas las rutas
    children: [
      {
        path: 'partidos',
        name: 'partidos',
        component: () => import('@/views/Partidos.vue')
      },
      {
        path:'pistas',
        name:'pistas',
        component: () => import('@/views/Pistas.vue')
      }
    ]

  },
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router

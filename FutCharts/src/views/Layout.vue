<template>
    <aside class="relative bg-sidebar h-screen bg-blue-700 w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <RouterLink to="/">
                <div
                    class="w-full bg-white bg-opacity-25 text-2xl text-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                    FutCharts
                </div>
            </RouterLink>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <div class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fa-regular fa-futbol mr-3"></i>
                Goles
            </div>
            <RouterLink to="partidos">
                <div class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fa-solid fa-medal mr-3"></i>
                    Partidos
                </div>
            </RouterLink>
            <RouterLink to="pistas">
                <div class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-table mr-3"></i>
                    Pistas
                </div>
            </RouterLink>

            <div class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fa-solid fa-chart-simple mr-3"></i>
                Gráficos
            </div>
        </nav>
    </aside>
    <!-- <div class="pos"></div> -->
</template>

<script>
export default {
    name: 'Layout'
}
</script>

<style>

</style>
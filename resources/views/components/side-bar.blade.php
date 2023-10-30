<div
    class="basis-[30%] min-h-screen bg-white drop-shadow-md dark:bg-gray-800 border-r border-gray-100 dark:border-gray-700 z-10 relative px-5 py-4">

    <!-- Close and Open sidebar icon -->
    <div>
        <span
            class="drop-shadow-sm rounded-[8px] border border-gray-200 flex items-center justify-center bg-white h-6 w-6 block absolute -right-3 top-[1.4rem]">
            <x-icons.chevron-left :size="2" :color="'#363B40'" />
        </span>
    </div>
    <div class="flex flex-col gap-8">
        <!-- Logo  -->
        <div class="flex items-center gap-2 justify-center">
            <img src="/assets/images/Logo/Aqua Flex.png" alt="AquaFlex Logo" class="w-10">
            <div>
                <h1 class="font-semibold text-3xl">AquaFlex</h1>
            </div>
        </div>

        <!-- Tabs -->
        <div class="flex flex-col gap-2">
            <h1 class="font-medium text-[18px] text-gray-350">MAIN</h1>
            <div class="flex">
                <h2 class="flex justify-between bg-primary/20 py-3 w-full rounded-md font-semibold px-4">
                    <x-custom-icons.lu-layout-dashboard />Dashboard<x-icons.chevron-up /></h2>
            </div>
        </div>
    </div>


</div>

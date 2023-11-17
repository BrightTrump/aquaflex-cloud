{{-- <aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
    class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
    @click.outside="sidebarToggle = false">
    <!-- SIDEBAR HEADER -->
    <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
        <a href="/">
            <img src="/assets/images/Logo/aquaflex-white.png" alt="Logo" class="w-[12rem]" />
        </a>

        <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
            <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                    fill="" />
            </svg>
        </button>
    </div>
    <!-- SIDEBAR HEADER -->

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <!-- Sidebar Menu -->
        <nav class="mt-5 py-4 px-4 lg:mt-9 lg:px-6" x-data="{ selected: $persist('Dashboard') }">
            <!-- Menu Group -->
            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

                <ul class="mb-6 flex flex-col gap-1.5">
                    <!-- Menu Item Dashboard -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="#" @click.prevent="selected = (selected === 'Dashboard' ? '':'Dashboard')"
                            :class="{
                                'bg-graydark dark:bg-meta-4': (selected === 'Dashboard') || (
                                    page === 'ecommerce' || page === 'analytics')
                            }">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                                    fill="" />
                                <path
                                    d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                                    fill="" />
                                <path
                                    d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                                    fill="" />
                                <path
                                    d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                                    fill="" />
                            </svg>

                            Dashboard

                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                :class="{ 'rotate-180': (selected === 'Dashboard') }" width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                    fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden"
                            :class="(selected === 'Dashboard') ? 'block' : 'hidden'">
                            <ul class="mt-4 mb-5.5 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                                        href="index.html" :class="page === 'ecommerce' && '!text-white'">Production
                                    </a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                                        href="index-analytics.html"
                                        :class="page === 'analytics' && '!text-white'">Analytics
                                    </a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                                        href="index-marketing.html"
                                        :class="page === 'marketing' && '!text-white'">Marketing
                                    </a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                                        href="index-crm.html" :class="page === 'crm' && '!text-white'">CRM
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>
                    <!-- Menu Item Dashboard -->

                    <!-- Menu Item Stock -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="/stocks" @click="selected = (selected === 'Stocks' ? '':'Stocks')"
                            :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Stocks') && (page === 'Stocks') }">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="18" height="18"
                                viewBox="0,0,256,256">
                                <g fill="#dee4ee" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(5.33333,5.33333)">
                                        <path
                                            d="M8.5,5c-1.36359,0 -2.5,1.13641 -2.5,2.5v7c0,1.1925 0.86988,2.21234 2,2.44922v21.55078c0,2.4675 2.0325,4.5 4.5,4.5h23c2.4675,0 4.5,-2.0325 4.5,-4.5v-21.55078c1.13012,-0.23688 2,-1.25672 2,-2.44922v-7c0,-1.36359 -1.13641,-2.5 -2.5,-2.5zM9,8h30v6h-0.5h-29h-0.5zM11,17h26v21.5c0,0.8465 -0.6535,1.5 -1.5,1.5h-23c-0.8465,0 -1.5,-0.6535 -1.5,-1.5zM19.5,21c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h9c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381z">
                                        </path>
                                    </g>
                                </g>
                            </svg>

                            Stock
                        </a>
                    </li>
                    <!-- Menu Item Stocks -->

                </ul>
            </div>

            <!-- Support Group -->
            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">SUPPORT</h3>

                <ul class="mb-6 flex flex-col gap-1.5">

                    <!-- Menu Item Invoice -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="invoice.html" @click="selected = (selected === 'Invoice' ? '':'Invoice')"
                            :class="{
                                'bg-graydark dark:bg-meta-4': (selected === 'Invoice') && (
                                    page === 'Invoice')
                            }"
                            :class="page === 'Invoice' && 'bg-graydark'">
                            <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_130_9787)">
                                    <path
                                        d="M15.8343 2.49902C15.8343 1.43027 14.9624 0.530273 13.8655 0.530273H4.13428C3.06553 0.530273 2.16553 1.40215 2.16553 2.49902V16.6178C2.16553 16.8428 2.30615 17.0678 2.50303 17.1803C2.6999 17.2928 2.95303 17.2646 3.1499 17.1521L4.55615 16.224L6.44053 17.4615C6.66553 17.6021 6.91865 17.6021 7.14365 17.4615L8.9999 16.224L10.8562 17.4615C10.9687 17.5459 11.0812 17.574 11.1937 17.574C11.3062 17.574 11.4468 17.5459 11.5312 17.4615L13.3874 16.224L14.7937 17.1803C14.9905 17.3209 15.2437 17.3209 15.4405 17.2084C15.6374 17.0959 15.778 16.8709 15.778 16.6459L15.8343 2.49902ZM14.0343 15.099C13.6687 14.8459 13.1905 14.8459 12.8249 15.099L11.2218 16.1678L9.61865 15.099C9.42178 14.9865 9.2249 14.9021 8.9999 14.9021C8.80303 14.9021 8.57803 14.9584 8.40928 15.099L6.80615 16.1678L5.20303 15.099C4.8374 14.8459 4.35928 14.8459 3.99365 15.099L3.45928 15.4365V2.49902C3.45928 2.10527 3.76865 1.7959 4.1624 1.7959H13.9218C14.3155 1.7959 14.6249 2.10527 14.6249 2.49902V15.4365L14.0343 15.099Z"
                                        fill="" />
                                    <path
                                        d="M7.93106 3.79272H5.5123C5.1748 3.79272 4.89355 4.07397 4.89355 4.41147C4.89355 4.74897 5.1748 5.03022 5.5123 5.03022H7.93106C8.26856 5.03022 8.54981 4.74897 8.54981 4.41147C8.54981 4.07397 8.26856 3.79272 7.93106 3.79272Z"
                                        fill="" />
                                    <path
                                        d="M12.347 3.79272H11.672C11.3345 3.79272 11.0532 4.07397 11.0532 4.41147C11.0532 4.74897 11.3345 5.03022 11.672 5.03022H12.347C12.6845 5.03022 12.9657 4.74897 12.9657 4.41147C12.9657 4.07397 12.6845 3.79272 12.347 3.79272Z"
                                        fill="" />
                                    <path
                                        d="M5.5123 8.74275H7.05918C7.39668 8.74275 7.67793 8.4615 7.67793 8.124C7.67793 7.7865 7.39668 7.50525 7.05918 7.50525H5.5123C5.1748 7.50525 4.89355 7.7865 4.89355 8.124C4.89355 8.4615 5.14668 8.74275 5.5123 8.74275Z"
                                        fill="" />
                                    <path
                                        d="M12.347 7.47717H11.672C11.3345 7.47717 11.0532 7.75842 11.0532 8.09592C11.0532 8.43342 11.3345 8.71467 11.672 8.71467H12.347C12.6845 8.71467 12.9657 8.43342 12.9657 8.09592C12.9657 7.75842 12.6845 7.47717 12.347 7.47717Z"
                                        fill="" />
                                    <path
                                        d="M7.93106 11.1334H5.5123C5.1748 11.1334 4.89355 11.4147 4.89355 11.7522C4.89355 12.0897 5.1748 12.3709 5.5123 12.3709H7.93106C8.26856 12.3709 8.54981 12.0897 8.54981 11.7522C8.54981 11.4147 8.26856 11.1334 7.93106 11.1334Z"
                                        fill="" />
                                    <path
                                        d="M12.347 11.1334H11.672C11.3345 11.1334 11.0532 11.4147 11.0532 11.7522C11.0532 12.0897 11.3345 12.3709 11.672 12.3709H12.347C12.6845 12.3709 12.9657 12.0897 12.9657 11.7522C12.9657 11.4147 12.6845 11.1334 12.347 11.1334Z"
                                        fill="" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_130_9787">
                                        <rect width="18" height="18" fill="white"
                                            transform="translate(0 0.052124)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            Invoice

                        </a>
                    </li>
                    <!-- Menu Item Invoice -->
                </ul>
            </div>

        </nav>
        <!-- Sidebar Menu -->

    </div>
</aside> --}}

<aside class="lx:flex hidden basis-[300px] h-[82vh] bg-white border border-gray-150 rounded-lg customer-sidebar sticky top-0 ">
    <ul>
        <li>
            <a href="/customer/account">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="none" class="dng-icon"
                    viewBox="0 0 16 18">
                    <path
                        d="M1 17C1.80235 13.7794 4.63218 12.2887 8 12.2887C11.3678 12.2887 14.1976 13.7794 15 17M11.9375 5.00017C11.9375 7.20941 10.1746 9.00035 8 9.00035C5.82538 9.00035 4.0625 7.20941 4.0625 5.00017C4.0625 2.79094 5.82538 1 8 1C10.1746 1 11.9375 2.79094 11.9375 5.00017Z"
                        stroke="#171725" stroke-width="2" stroke-linecap="round"></path>
                </svg>
                My Account
            </a>
        </li>
        <li>
            <a href="/customer/orders"><svg class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" viewBox="0 0 17.092 17.873">
                    <g id="Icon" transform="translate(-409.241 -375.497)">
                        <path id="Path_219" data-name="Path 219"
                            d="M413.466,380.6a15.992,15.992,0,0,1,.123-1.943,4.18,4.18,0,0,1,4.549-3.151,4.054,4.054,0,0,1,3.919,3.741c.009.436,0,.872,0,1.354h2.872c.193,0,.386,0,.579,0,.589.012.879.286.813.811-.4,3.247-.8,6.495-1.227,9.739a2.674,2.674,0,0,1-2.769,2.2q-4.543.022-9.086,0a2.681,2.681,0,0,1-2.771-2.2c-.344-2.558-.649-5.12-.97-7.68-.078-.62-.147-1.242-.234-1.861-.108-.759.125-1.011.967-1.012Zm-2.723,1.3c.062.5.119.978.177,1.452.306,2.481.606,4.963.924,7.443.114.888.642,1.293,1.628,1.294q4.32,0,8.639,0a2.279,2.279,0,0,0,.57-.059,1.428,1.428,0,0,0,1.074-1.446c.213-1.836.452-3.669.679-5.5.13-1.052.257-2.1.387-3.174h-2.742v1.215c.038.015.076.032.115.046.437.159.649.424.563.746a.73.73,0,0,1-.826.524c-.43-.008-.861.008-1.291-.006a.668.668,0,0,1-.711-.588c-.021-.423.28-.612.676-.709v-1.218h-5.655v1.221c.434.1.724.3.683.722a.613.613,0,0,1-.636.565c-.518.026-1.039.024-1.558,0-.349-.016-.627-.224-.614-.526a1.458,1.458,0,0,1,.364-.659c.051-.071.2-.084.292-.118V381.9Zm4.154-1.321h5.727c0-.514.036-1-.007-1.491a2.723,2.723,0,0,0-2.627-2.306,2.77,2.77,0,0,0-2.967,1.982A12.7,12.7,0,0,0,414.9,380.578Z"
                            transform="translate(0 0)" />
                        <path id="Path_220" data-name="Path 220"
                            d="M475.527,506.525c.71-.887,1.409-1.754,2.1-2.627a.66.66,0,0,1,.828-.285.609.609,0,0,1,.258.961c-.841,1.079-1.7,2.145-2.563,3.206a.6.6,0,0,1-.858.123c-.635-.412-1.267-.829-1.89-1.259a.635.635,0,1,1,.71-1.053C474.584,505.888,475.043,506.2,475.527,506.525Z"
                            transform="translate(-57.815 -117.848)" />
                    </g>
                </svg>My Orders</a>
        </li>
        <li>
            <a href="/customer/pending-reviews"><svg class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" viewBox="0 0 17.092 17.873">
                    <g id="Icon" transform="translate(-409.241 -375.497)">
                        <path id="Path_219" data-name="Path 219"
                            d="M413.466,380.6a15.992,15.992,0,0,1,.123-1.943,4.18,4.18,0,0,1,4.549-3.151,4.054,4.054,0,0,1,3.919,3.741c.009.436,0,.872,0,1.354h2.872c.193,0,.386,0,.579,0,.589.012.879.286.813.811-.4,3.247-.8,6.495-1.227,9.739a2.674,2.674,0,0,1-2.769,2.2q-4.543.022-9.086,0a2.681,2.681,0,0,1-2.771-2.2c-.344-2.558-.649-5.12-.97-7.68-.078-.62-.147-1.242-.234-1.861-.108-.759.125-1.011.967-1.012Zm-2.723,1.3c.062.5.119.978.177,1.452.306,2.481.606,4.963.924,7.443.114.888.642,1.293,1.628,1.294q4.32,0,8.639,0a2.279,2.279,0,0,0,.57-.059,1.428,1.428,0,0,0,1.074-1.446c.213-1.836.452-3.669.679-5.5.13-1.052.257-2.1.387-3.174h-2.742v1.215c.038.015.076.032.115.046.437.159.649.424.563.746a.73.73,0,0,1-.826.524c-.43-.008-.861.008-1.291-.006a.668.668,0,0,1-.711-.588c-.021-.423.28-.612.676-.709v-1.218h-5.655v1.221c.434.1.724.3.683.722a.613.613,0,0,1-.636.565c-.518.026-1.039.024-1.558,0-.349-.016-.627-.224-.614-.526a1.458,1.458,0,0,1,.364-.659c.051-.071.2-.084.292-.118V381.9Zm4.154-1.321h5.727c0-.514.036-1-.007-1.491a2.723,2.723,0,0,0-2.627-2.306,2.77,2.77,0,0,0-2.967,1.982A12.7,12.7,0,0,0,414.9,380.578Z"
                            transform="translate(0 0)" />
                        <path id="Path_220" data-name="Path 220"
                            d="M475.527,506.525c.71-.887,1.409-1.754,2.1-2.627a.66.66,0,0,1,.828-.285.609.609,0,0,1,.258.961c-.841,1.079-1.7,2.145-2.563,3.206a.6.6,0,0,1-.858.123c-.635-.412-1.267-.829-1.89-1.259a.635.635,0,1,1,.71-1.053C474.584,505.888,475.043,506.2,475.527,506.525Z"
                            transform="translate(-57.815 -117.848)" />
                    </g>
                </svg>Pending Reviews</a>
        </li>
    </ul>
</aside>

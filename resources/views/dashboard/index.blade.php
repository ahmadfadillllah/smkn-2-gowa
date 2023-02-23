@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-titles style1">
                            <div class="d-flex align-items-center">
                                <h2 class="heading">Dashboard</h2>
                                <!-- <p class="text-warning ms-2">Welcome Back Yatin Sharma !</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper mySwiper-counter position-relative overflow-hidden">
                    <div class="swiper-wrapper ">
                        <!-- ---swiper-slide--- -->
                        <div class="swiper-slide">
                            <div class="card counter">
                                <div class="card-body d-flex align-items-center">
                                    <div class="card-box-icon">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22.8333 6.66667V7.16667H23.3333H28.3333C28.6428 7.16667 28.9395 7.28958 29.1583 7.50838C29.3771 7.72717 29.5 8.02391 29.5 8.33333V28.3333C29.5 28.6428 29.3771 28.9395 29.1583 29.1583C28.9395 29.3771 28.6428 29.5 28.3333 29.5H13.3333C13.0239 29.5 12.7272 29.3771 12.5084 29.1583C12.2896 28.9395 12.1667 28.6428 12.1667 28.3333C12.1667 28.0239 12.2896 27.7272 12.5084 27.5084C12.7272 27.2896 13.0239 27.1667 13.3333 27.1667H26.6667H27.1667V26.6667V18.3333V17.8333H26.6667H20H19.5V18.3333V20C19.5 20.3094 19.3771 20.6062 19.1583 20.825C18.9395 21.0438 18.6428 21.1667 18.3333 21.1667H11.6667C11.3572 21.1667 11.0605 21.0438 10.8417 20.825C10.6229 20.6062 10.5 20.3094 10.5 20V18.3333V17.8333H10H3.33333H2.83333V18.3333V26.6667V27.1667H3.33333H6.66667C6.97609 27.1667 7.27283 27.2896 7.49162 27.5084C7.71042 27.7272 7.83333 28.0239 7.83333 28.3333C7.83333 28.6428 7.71042 28.9395 7.49162 29.1583C7.27283 29.3771 6.97609 29.5 6.66667 29.5H1.66667C1.35725 29.5 1.0605 29.3771 0.841709 29.1583C0.622917 28.9395 0.5 28.6428 0.5 28.3333V8.33333C0.5 8.02391 0.622916 7.72717 0.841709 7.50838C1.0605 7.28958 1.35725 7.16667 1.66667 7.16667H6.66667H7.16667V6.66667V1.66667C7.16667 1.35725 7.28958 1.0605 7.50838 0.841709C7.72717 0.622916 8.02391 0.5 8.33333 0.5H21.6667C21.9761 0.5 22.2728 0.622916 22.4916 0.841709C22.7104 1.0605 22.8333 1.35725 22.8333 1.66667V6.66667ZM10 2.83333H9.5V3.33333V6.66667V7.16667H10H20H20.5V6.66667V3.33333V2.83333H20H10ZM16.6667 18.8333H17.1667V18.3333V15V14.5H16.6667H13.3333H12.8333V15V18.3333V18.8333H13.3333H16.6667ZM19.5 15V15.5H20H26.6667H27.1667V15V10V9.5H26.6667H3.33333H2.83333V10V15V15.5H3.33333H10H10.5V15V13.3333C10.5 13.0239 10.6229 12.7272 10.8417 12.5084C11.0605 12.2896 11.3572 12.1667 11.6667 12.1667H18.3333C18.6428 12.1667 18.9395 12.2896 19.1583 12.5084C19.3771 12.7272 19.5 13.0239 19.5 13.3333V15Z"
                                                fill="var(--primary)" stroke="var(--primary)" />
                                        </svg>
                                    </div>
                                    <div class="chart-num">
                                        <h2 class="font-w600 mb-0">{{ $berita->count() }}</h2>
                                        <p>
                                            Berita/kegiatan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card counter">
                                <div class="card-body d-flex align-items-center">
                                    <div class="card-box-icon">
                                        <svg width="28" height="30" viewBox="0 0 28 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M26.9666 8.96667L20.3 0.633334C20.1447 0.436911 19.9473 0.277976 19.7222 0.168333C19.4972 0.0586894 19.2503 0.00115414 19 0H2.33329C1.89126 0 1.46734 0.175595 1.15478 0.488155C0.842221 0.800716 0.666626 1.22464 0.666626 1.66667V10C0.666626 10.442 0.842221 10.8659 1.15478 11.1785C1.46734 11.4911 1.89126 11.6667 2.33329 11.6667C2.77532 11.6667 3.19924 11.4911 3.5118 11.1785C3.82436 10.8659 3.99996 10.442 3.99996 10V3.33333H15.6666V10C15.6666 10.442 15.8422 10.8659 16.1548 11.1785C16.4673 11.4911 16.8913 11.6667 17.3333 11.6667H24V26.6667H3.99996V18.3333C3.99996 17.8913 3.82436 17.4674 3.5118 17.1548C3.19924 16.8423 2.77532 16.6667 2.33329 16.6667C1.89126 16.6667 1.46734 16.8423 1.15478 17.1548C0.842221 17.4674 0.666626 17.8913 0.666626 18.3333V28.3333C0.666626 28.7754 0.842221 29.1993 1.15478 29.5118C1.46734 29.8244 1.89126 30 2.33329 30H25.6666C26.1086 30 26.5326 29.8244 26.8451 29.5118C27.1577 29.1993 27.3333 28.7754 27.3333 28.3333V10C27.3311 9.62406 27.2019 9.2599 26.9666 8.96667ZM19 4.33333L22.2 8.33333H19V4.33333Z"
                                                fill="#FF4646" />
                                            <path
                                                d="M26.9666 8.96667L20.3 0.633334C20.1447 0.436911 19.9473 0.277976 19.7222 0.168333C19.4972 0.0586894 19.2503 0.00115414 19 0H2.33329C1.89126 0 1.46734 0.175595 1.15478 0.488155C0.842221 0.800716 0.666626 1.22464 0.666626 1.66667V10C0.666626 10.442 0.842221 10.8659 1.15478 11.1785C1.46734 11.4911 1.89126 11.6667 2.33329 11.6667C2.77532 11.6667 3.19924 11.4911 3.5118 11.1785C3.82436 10.8659 3.99996 10.442 3.99996 10V3.33333H15.6666V10C15.6666 10.442 15.8422 10.8659 16.1548 11.1785C16.4673 11.4911 16.8913 11.6667 17.3333 11.6667H24V26.6667H3.99996V18.3333C3.99996 17.8913 3.82436 17.4674 3.5118 17.1548C3.19924 16.8423 2.77532 16.6667 2.33329 16.6667C1.89126 16.6667 1.46734 16.8423 1.15478 17.1548C0.842221 17.4674 0.666626 17.8913 0.666626 18.3333V28.3333C0.666626 28.7754 0.842221 29.1993 1.15478 29.5118C1.46734 29.8244 1.89126 30 2.33329 30H25.6666C26.1086 30 26.5326 29.8244 26.8451 29.5118C27.1577 29.1993 27.3333 28.7754 27.3333 28.3333V10C27.3311 9.62406 27.2019 9.2599 26.9666 8.96667ZM19 4.33333L22.2 8.33333H19V4.33333Z"
                                                stroke="none" />
                                            <path
                                                d="M14 13.3333C13.558 13.3333 13.134 13.5089 12.8215 13.8215C12.5089 14.1341 12.3333 14.558 12.3333 15V16.6667H10.6667C10.2246 16.6667 9.80072 16.8423 9.48816 17.1548C9.1756 17.4674 9 17.8913 9 18.3333C9 18.7754 9.1756 19.1993 9.48816 19.5118C9.80072 19.8244 10.2246 20 10.6667 20H12.3333V21.6667C12.3333 22.1087 12.5089 22.5326 12.8215 22.8452C13.134 23.1577 13.558 23.3333 14 23.3333C14.442 23.3333 14.866 23.1577 15.1785 22.8452C15.4911 22.5326 15.6667 22.1087 15.6667 21.6667V20H17.3333C17.7754 20 18.1993 19.8244 18.5118 19.5118C18.8244 19.1993 19 18.7754 19 18.3333C19 17.8913 18.8244 17.4674 18.5118 17.1548C18.1993 16.8423 17.7754 16.6667 17.3333 16.6667H15.6667V15C15.6667 14.558 15.4911 14.1341 15.1785 13.8215C14.866 13.5089 14.442 13.3333 14 13.3333Z"
                                                fill="#FF4646" />
                                            <path
                                                d="M14 13.3333C13.558 13.3333 13.134 13.5089 12.8215 13.8215C12.5089 14.1341 12.3333 14.558 12.3333 15V16.6667H10.6667C10.2246 16.6667 9.80072 16.8423 9.48816 17.1548C9.1756 17.4674 9 17.8913 9 18.3333C9 18.7754 9.1756 19.1993 9.48816 19.5118C9.80072 19.8244 10.2246 20 10.6667 20H12.3333V21.6667C12.3333 22.1087 12.5089 22.5326 12.8215 22.8452C13.134 23.1577 13.558 23.3333 14 23.3333C14.442 23.3333 14.866 23.1577 15.1785 22.8452C15.4911 22.5326 15.6667 22.1087 15.6667 21.6667V20H17.3333C17.7754 20 18.1993 19.8244 18.5118 19.5118C18.8244 19.1993 19 18.7754 19 18.3333C19 17.8913 18.8244 17.4674 18.5118 17.1548C18.1993 16.8423 17.7754 16.6667 17.3333 16.6667H15.6667V15C15.6667 14.558 15.4911 14.1341 15.1785 13.8215C14.866 13.5089 14.442 13.3333 14 13.3333Z"
                                                stroke="transparent" />
                                        </svg>
                                    </div>
                                    <div class="chart-num">
                                        <h2 class="font-w600 mb-0">1,032</h2>
                                        <p>
                                            Inquiries
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card counter">
                                <div class="card-body d-flex align-items-center">
                                    <div class="card-box-icon">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22.2833 9.18334C23.091 9.71212 24.0346 9.99576 25 10C25.9889 10 26.9556 9.70676 27.7778 9.15735C28.6001 8.60794 29.2409 7.82705 29.6194 6.91342C29.9978 5.99979 30.0968 4.99446 29.9039 4.02455C29.711 3.05465 29.2348 2.16373 28.5355 1.46447C27.8362 0.765206 26.9453 0.289002 25.9754 0.0960758C25.0055 -0.0968503 24.0002 0.00216643 23.0865 0.380605C22.1729 0.759043 21.392 1.39991 20.8426 2.22215C20.2932 3.0444 20 4.0111 20 5C20.0045 5.50999 20.0888 6.01612 20.25 6.5L17.6666 9.11667C16.7019 8.50671 15.5575 8.2452 14.4236 8.37557C13.2896 8.50594 12.2344 9.02035 11.4333 9.83333L9.89997 9.33334C9.96784 9.00436 10.0014 8.66923 9.99997 8.33334C10.0044 7.20166 9.62475 6.10197 8.92315 5.21402C8.22154 4.32607 7.23946 3.70239 6.13745 3.44495C5.03544 3.1875 3.87869 3.31151 2.8563 3.79671C1.83391 4.28191 1.00636 5.09959 0.508922 6.11609C0.011488 7.13258 -0.126399 8.28776 0.117802 9.39278C0.362002 10.4978 0.973844 11.4873 1.85331 12.1995C2.73277 12.9117 3.82783 13.3045 4.95948 13.3137C6.09112 13.3229 7.19241 12.9479 8.0833 12.25L9.99997 12.8833C9.9918 13.0332 9.9918 13.1834 9.99997 13.3333C9.99997 14.6594 10.5267 15.9312 11.4644 16.8689C12.4021 17.8066 13.6739 18.3333 15 18.3333C16.326 18.3333 17.5978 17.8066 18.5355 16.8689C19.4732 15.9312 20 14.6594 20 13.3333C19.9886 12.8008 19.8987 12.2729 19.7333 11.7667L22.2833 9.18334ZM25 3.33334C25.3296 3.33334 25.6518 3.43108 25.9259 3.61422C26.2 3.79736 26.4136 4.05765 26.5398 4.3622C26.6659 4.66674 26.6989 5.00185 26.6346 5.32515C26.5703 5.64845 26.4116 5.94543 26.1785 6.17851C25.9454 6.4116 25.6484 6.57034 25.3251 6.63464C25.0018 6.69895 24.6667 6.66595 24.3622 6.5398C24.0576 6.41366 23.7973 6.20003 23.6142 5.92595C23.431 5.65187 23.3333 5.32964 23.3333 5C23.3333 4.55797 23.5089 4.13405 23.8215 3.82149C24.134 3.50893 24.5579 3.33334 25 3.33334ZM3.3333 8.33334C3.3333 8.0037 3.43105 7.68147 3.61418 7.40739C3.79732 7.1333 4.05762 6.91968 4.36216 6.79354C4.66671 6.66739 5.00182 6.63438 5.32512 6.69869C5.64842 6.763 5.94539 6.92174 6.17848 7.15482C6.41157 7.38791 6.5703 7.68488 6.63461 8.00819C6.69892 8.33149 6.66591 8.6666 6.53977 8.97114C6.41362 9.27569 6.2 9.53598 5.92592 9.71912C5.65183 9.90225 5.3296 10 4.99997 10C4.55794 10 4.13402 9.82441 3.82146 9.51185C3.5089 9.19929 3.3333 8.77536 3.3333 8.33334ZM15 15C14.6703 15 14.3481 14.9023 14.074 14.7191C13.7999 14.536 13.5863 14.2757 13.4602 13.9711C13.334 13.6666 13.301 13.3315 13.3653 13.0082C13.4296 12.6849 13.5884 12.3879 13.8215 12.1548C14.0545 11.9217 14.3515 11.763 14.6748 11.6987C14.9981 11.6344 15.3332 11.6674 15.6378 11.7935C15.9423 11.9197 16.2026 12.1333 16.3857 12.4074C16.5689 12.6815 16.6666 13.0037 16.6666 13.3333C16.6666 13.7754 16.491 14.1993 16.1785 14.5118C15.8659 14.8244 15.442 15 15 15Z"
                                                fill="#9568FF" />
                                            <path
                                                d="M22.2833 9.18334C23.091 9.71212 24.0346 9.99576 25 10C25.9889 10 26.9556 9.70676 27.7778 9.15735C28.6001 8.60794 29.2409 7.82705 29.6194 6.91342C29.9978 5.99979 30.0968 4.99446 29.9039 4.02455C29.711 3.05465 29.2348 2.16373 28.5355 1.46447C27.8362 0.765206 26.9453 0.289002 25.9754 0.0960758C25.0055 -0.0968503 24.0002 0.00216643 23.0865 0.380605C22.1729 0.759043 21.392 1.39991 20.8426 2.22215C20.2932 3.0444 20 4.0111 20 5C20.0045 5.50999 20.0888 6.01612 20.25 6.5L17.6666 9.11667C16.7019 8.50671 15.5575 8.2452 14.4236 8.37557C13.2896 8.50594 12.2344 9.02035 11.4333 9.83333L9.89997 9.33334C9.96784 9.00436 10.0014 8.66923 9.99997 8.33334C10.0044 7.20166 9.62475 6.10197 8.92315 5.21402C8.22154 4.32607 7.23946 3.70239 6.13745 3.44495C5.03544 3.1875 3.87869 3.31151 2.8563 3.79671C1.83391 4.28191 1.00636 5.09959 0.508922 6.11609C0.011488 7.13258 -0.126399 8.28776 0.117802 9.39278C0.362002 10.4978 0.973844 11.4873 1.85331 12.1995C2.73277 12.9117 3.82783 13.3045 4.95948 13.3137C6.09112 13.3229 7.19241 12.9479 8.0833 12.25L9.99997 12.8833C9.9918 13.0332 9.9918 13.1834 9.99997 13.3333C9.99997 14.6594 10.5267 15.9312 11.4644 16.8689C12.4021 17.8066 13.6739 18.3333 15 18.3333C16.326 18.3333 17.5978 17.8066 18.5355 16.8689C19.4732 15.9312 20 14.6594 20 13.3333C19.9886 12.8008 19.8987 12.2729 19.7333 11.7667L22.2833 9.18334ZM25 3.33334C25.3296 3.33334 25.6518 3.43108 25.9259 3.61422C26.2 3.79736 26.4136 4.05765 26.5398 4.3622C26.6659 4.66674 26.6989 5.00185 26.6346 5.32515C26.5703 5.64845 26.4116 5.94543 26.1785 6.17851C25.9454 6.4116 25.6484 6.57034 25.3251 6.63464C25.0018 6.69895 24.6667 6.66595 24.3622 6.5398C24.0576 6.41366 23.7973 6.20003 23.6142 5.92595C23.431 5.65187 23.3333 5.32964 23.3333 5C23.3333 4.55797 23.5089 4.13405 23.8215 3.82149C24.134 3.50893 24.5579 3.33334 25 3.33334ZM3.3333 8.33334C3.3333 8.0037 3.43105 7.68147 3.61418 7.40739C3.79732 7.1333 4.05762 6.91968 4.36216 6.79354C4.66671 6.66739 5.00182 6.63438 5.32512 6.69869C5.64842 6.763 5.94539 6.92174 6.17848 7.15482C6.41157 7.38791 6.5703 7.68488 6.63461 8.00819C6.69892 8.33149 6.66591 8.6666 6.53977 8.97114C6.41362 9.27569 6.2 9.53598 5.92592 9.71912C5.65183 9.90225 5.3296 10 4.99997 10C4.55794 10 4.13402 9.82441 3.82146 9.51185C3.5089 9.19929 3.3333 8.77536 3.3333 8.33334ZM15 15C14.6703 15 14.3481 14.9023 14.074 14.7191C13.7999 14.536 13.5863 14.2757 13.4602 13.9711C13.334 13.6666 13.301 13.3315 13.3653 13.0082C13.4296 12.6849 13.5884 12.3879 13.8215 12.1548C14.0545 11.9217 14.3515 11.763 14.6748 11.6987C14.9981 11.6344 15.3332 11.6674 15.6378 11.7935C15.9423 11.9197 16.2026 12.1333 16.3857 12.4074C16.5689 12.6815 16.6666 13.0037 16.6666 13.3333C16.6666 13.7754 16.491 14.1993 16.1785 14.5118C15.8659 14.8244 15.442 15 15 15Z"
                                                stroke="none" />
                                            <path
                                                d="M8.33329 15H3.33329C2.89127 15 2.46734 15.1756 2.15478 15.4882C1.84222 15.8007 1.66663 16.2246 1.66663 16.6667V28.3333C1.66663 28.7754 1.84222 29.1993 2.15478 29.5118C2.46734 29.8244 2.89127 30 3.33329 30H8.33329C8.77532 30 9.19924 29.8244 9.5118 29.5118C9.82436 29.1993 9.99996 28.7754 9.99996 28.3333V16.6667C9.99996 16.2246 9.82436 15.8007 9.5118 15.4882C9.19924 15.1756 8.77532 15 8.33329 15ZM6.66663 26.6667H4.99996V18.3333H6.66663V26.6667ZM28.3333 11.6667H23.3333C22.8913 11.6667 22.4673 11.8423 22.1548 12.1548C21.8422 12.4674 21.6666 12.8913 21.6666 13.3333V28.3333C21.6666 28.7754 21.8422 29.1993 22.1548 29.5118C22.4673 29.8244 22.8913 30 23.3333 30H28.3333C28.7753 30 29.1992 29.8244 29.5118 29.5118C29.8244 29.1993 30 28.7754 30 28.3333V23.3333C30 22.8913 29.8244 22.4674 29.5118 22.1548C29.1992 21.8423 28.7753 21.6667 28.3333 21.6667C27.8913 21.6667 27.4673 21.8423 27.1548 22.1548C26.8422 22.4674 26.6666 22.8913 26.6666 23.3333V26.6667H25V15H26.6666V18.3333C26.6666 18.7754 26.8422 19.1993 27.1548 19.5118C27.4673 19.8244 27.8913 20 28.3333 20C28.7753 20 29.1992 19.8244 29.5118 19.5118C29.8244 19.1993 30 18.7754 30 18.3333V13.3333C30 12.8913 29.8244 12.4674 29.5118 12.1548C29.1992 11.8423 28.7753 11.6667 28.3333 11.6667ZM18.3333 20H13.3333C12.8913 20 12.4673 20.1756 12.1548 20.4882C11.8422 20.8007 11.6666 21.2246 11.6666 21.6667V28.3333C11.6666 28.7754 11.8422 29.1993 12.1548 29.5118C12.4673 29.8244 12.8913 30 13.3333 30H18.3333C18.7753 30 19.1992 29.8244 19.5118 29.5118C19.8244 29.1993 20 28.7754 20 28.3333V21.6667C20 21.2246 19.8244 20.8007 19.5118 20.4882C19.1992 20.1756 18.7753 20 18.3333 20ZM16.6666 26.6667H15V23.3333H16.6666V26.6667Z"
                                                fill="#9568FF" />
                                            <path
                                                d="M8.33329 15H3.33329C2.89127 15 2.46734 15.1756 2.15478 15.4882C1.84222 15.8007 1.66663 16.2246 1.66663 16.6667V28.3333C1.66663 28.7754 1.84222 29.1993 2.15478 29.5118C2.46734 29.8244 2.89127 30 3.33329 30H8.33329C8.77532 30 9.19924 29.8244 9.5118 29.5118C9.82436 29.1993 9.99996 28.7754 9.99996 28.3333V16.6667C9.99996 16.2246 9.82436 15.8007 9.5118 15.4882C9.19924 15.1756 8.77532 15 8.33329 15ZM6.66663 26.6667H4.99996V18.3333H6.66663V26.6667ZM28.3333 11.6667H23.3333C22.8913 11.6667 22.4673 11.8423 22.1548 12.1548C21.8422 12.4674 21.6666 12.8913 21.6666 13.3333V28.3333C21.6666 28.7754 21.8422 29.1993 22.1548 29.5118C22.4673 29.8244 22.8913 30 23.3333 30H28.3333C28.7753 30 29.1992 29.8244 29.5118 29.5118C29.8244 29.1993 30 28.7754 30 28.3333V23.3333C30 22.8913 29.8244 22.4674 29.5118 22.1548C29.1992 21.8423 28.7753 21.6667 28.3333 21.6667C27.8913 21.6667 27.4673 21.8423 27.1548 22.1548C26.8422 22.4674 26.6666 22.8913 26.6666 23.3333V26.6667H25V15H26.6666V18.3333C26.6666 18.7754 26.8422 19.1993 27.1548 19.5118C27.4673 19.8244 27.8913 20 28.3333 20C28.7753 20 29.1992 19.8244 29.5118 19.5118C29.8244 19.1993 30 18.7754 30 18.3333V13.3333C30 12.8913 29.8244 12.4674 29.5118 12.1548C29.1992 11.8423 28.7753 11.6667 28.3333 11.6667ZM18.3333 20H13.3333C12.8913 20 12.4673 20.1756 12.1548 20.4882C11.8422 20.8007 11.6666 21.2246 11.6666 21.6667V28.3333C11.6666 28.7754 11.8422 29.1993 12.1548 29.5118C12.4673 29.8244 12.8913 30 13.3333 30H18.3333C18.7753 30 19.1992 29.8244 19.5118 29.5118C19.8244 29.1993 20 28.7754 20 28.3333V21.6667C20 21.2246 19.8244 20.8007 19.5118 20.4882C19.1992 20.1756 18.7753 20 18.3333 20ZM16.6666 26.6667H15V23.3333H16.6666V26.6667Z"
                                                stroke="none" />
                                        </svg>
                                    </div>
                                    <div class="chart-num">
                                        <h2 class="font-w600 mb-0">102k</h2>
                                        <p>
                                            Invesment
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card counter">
                                <div class="card-body d-flex align-items-center">
                                    <div class="card-box-icon">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M35.0001 21.4C34.9363 21.0057 34.7328 20.6474 34.4269 20.3904C34.121 20.1334 33.733 19.9949 33.3335 20H26.6668C26.91 20.0032 27.151 19.953 27.3728 19.8531C27.5946 19.7532 27.7918 19.606 27.9507 19.4217C28.1095 19.2375 28.2261 19.0207 28.2922 18.7866C28.3583 18.5525 28.3724 18.3068 28.3335 18.0667L26.6668 8.0667C26.6029 7.67233 26.3995 7.31402 26.0936 7.05706C25.7877 6.80009 25.3996 6.66156 25.0001 6.6667H15.0001C14.6007 6.66156 14.2126 6.80009 13.9067 7.05706C13.6008 7.31402 13.3974 7.67233 13.3335 8.0667L11.6668 18.0667C11.6287 18.3061 11.6433 18.5509 11.7095 18.784C11.7757 19.0172 11.8919 19.2331 12.0501 19.4167C12.2084 19.6018 12.4054 19.7499 12.6271 19.8507C12.8488 19.9515 13.0899 20.0025 13.3335 20H6.66681C6.26733 19.9949 5.87929 20.1334 5.57337 20.3904C5.26746 20.6474 5.06403 21.0057 5.00014 21.4L3.33348 31.4C3.29537 31.6394 3.30992 31.8842 3.37613 32.1173C3.44233 32.3505 3.55859 32.5664 3.71681 32.75C3.87511 32.9351 4.07204 33.0833 4.29377 33.1841C4.51549 33.2848 4.7566 33.3358 5.00014 33.3334H18.3335C18.5742 33.3334 18.8121 33.2812 19.0308 33.1806C19.2494 33.0799 19.4437 32.933 19.6001 32.75C19.7584 32.5664 19.8746 32.3505 19.9408 32.1173C20.007 31.8842 20.0216 31.6394 19.9835 31.4L18.3168 21.4C18.2533 21.0085 18.0523 20.6525 17.7499 20.3958C17.4475 20.1392 17.0634 19.9989 16.6668 20H23.3335C22.934 19.9949 22.5459 20.1334 22.24 20.3904C21.9341 20.6474 21.7307 21.0057 21.6668 21.4L20.0001 31.4C19.962 31.6394 19.9766 31.8842 20.0428 32.1173C20.109 32.3505 20.2253 32.5664 20.3835 32.75C20.5418 32.9351 20.7387 33.0833 20.9604 33.1841C21.1822 33.2848 21.4233 33.3358 21.6668 33.3334H26.6668C27.1088 33.3334 27.5328 33.1578 27.8453 32.8452C28.1579 32.5327 28.3335 32.1087 28.3335 31.6667C28.3335 31.2247 28.1579 30.8008 27.8453 30.4882C27.5328 30.1756 27.1088 30 26.6668 30H23.6335L24.7501 23.3334H31.9168L33.0335 30H31.6668C31.2248 30 30.8009 30.1756 30.4883 30.4882C30.1757 30.8008 30.0001 31.2247 30.0001 31.6667C30.0001 32.1087 30.1757 32.5327 30.4883 32.8452C30.8009 33.1578 31.2248 33.3334 31.6668 33.3334H35.0001C35.2434 33.3365 35.4843 33.2864 35.7061 33.1865C35.9279 33.0866 36.1252 32.9393 36.284 32.7551C36.4428 32.5708 36.5594 32.3541 36.6255 32.12C36.6917 31.8859 36.7057 31.6402 36.6668 31.4L35.0001 21.4ZM6.96681 30L8.08348 23.3334H15.2501L16.3668 30H6.96681ZM15.3001 16.6667L16.4168 10H23.5835L24.7001 16.6667H15.3001Z"
                                                fill="#EB62D0" />
                                        </svg>
                                    </div>
                                    <div class="chart-num">
                                        <h2 class="font-w600 mb-0">32k</h2>
                                        <p>
                                            Assets
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- --column-- -->
                    <div class="col-xl-12">
                        <div class="user_reviews overflow-hidden">
                            <h4 class="heading mb-3"> User Reviews</h4>
                            @foreach ($reviews as $r)
                            <div class="swiper mySwiper position-relative ">
                                <div class="swiper-wrapper ">
                                    <!-- ---swiper-slide--- -->
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-header justify-content-start border-0 pb-0 p-4">
                                                <div class="slide-img me-3">
                                                    <img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/avatar') }}/{{ $r->user->avatar }}"
                                                        class="img-fluid" alt="">
                                                </div>
                                                <div>
                                                    <h4>{{ $r->user->name }}</h4>
                                                    <span>{{ $r->user->role }}</span>
                                                </div>
                                            </div>
                                            <div class="card-body p-4">
                                                <p class="mb-0">{{ $r->pesan }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ---/swiper-slide--- -->
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- --/column-- -->
                </div>
            </div>
        </div>
        <!--**********************************
					Footer start
				***********************************-->

    </div>
</div>
@include('dashboard.layout.footer')

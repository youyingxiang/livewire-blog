@extends('blog.layout',['title'=>'博客首页'])

@section('content')


    <div class="pb-16 bg-white" id="components">
        <div class="bg-white">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
            <div class="lg:text-center">
                <span class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">技术博文</span>
            </div>

            <div class="mt-5">
                <ul class="md:grid md:grid-cols-3 md:col-gap-8 md:row-gap-10">
                    <li>
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <img class="w-full" src="https://www.tailwindcss.cn/img/card-top.jpg"
                                 alt="Sunset in the mountains">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 hover:underline">The Coldest Sunset</div>
                                <p class="text-gray-700 text-base hover:underline">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                    Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>
                            </div>
                            <div class="px-6 py-4">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <img class="w-full" src="https://www.tailwindcss.cn//img/card-top.jpg"
                                 alt="Sunset in the mountains">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 hover:underline">The Coldest Sunset</div>
                                <p class="text-gray-700 text-base hover:underline">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                    Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>
                            </div>
                            <div class="px-6 py-4">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <img class="w-full" src="https://www.tailwindcss.cn//img/card-top.jpg"
                                 alt="Sunset in the mountains">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 hover:underline">The Coldest Sunset</div>
                                <p class="text-gray-700 text-base hover:underline">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                    Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>
                            </div>
                            <div class="px-6 py-4">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="lg:text-center pt-5">
                    <a class="mr-5 float-right text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase hover:underline">查看更多</a>
                </div>
            </div>

            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 bg-gray-50 mt-10">
                <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                    <h2 class="text-2xl leading-9 font-normal tracking-tight text-gray-900 sm:text-3xl sm:leading-10">
                        您是否有开发相关的需求？
                        <br>
                        <span class="text-indigo-600">请通过右边方式联系我</span>
                    </h2>
                    <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
                        <div class="inline-flex rounded-md shadow">
                            <a href="mailto:1365831278@qq.com" target="_blank"
                               class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                email邮件
                            </a>
                        </div>
                        <div class="ml-3 inline-flex rounded-md shadow">
                            <a href="tel:0147-88469258" target="_blank"
                               class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                电话
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
                <div class="lg:text-center ">
                    <p class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">合作案列</p>
                </div>

                <div class="py-1 mt-10">
                    <ul class="md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <li>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md  text-white">
                                        <img class="h-10 w-10" src="https://ss3.bdstatic.com/yrwDcj7w0QhBkMak8IuT_XF5ehU5bvGh7c50/comt/1586226297_a3024b56d55feaf3205f56396319bcd7_fullsize.jpeg">
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg leading-6 font-medium text-gray-900">中控智慧</h4>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        熵基科技股份有限公司是一家以生物识别为核心技术的全球知名企业，致力于生物识别核心技术赋能、智慧出入口“人、车、物”软件平台赋能、ZKTeco+智慧办公云平台赋能三大业务领域。
                                </div>
                            </div>
                        </li>
                        <li class="mt-10 md:mt-0">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md text-white">
                                        <img class="h-10 w-10" src="http://www.nreone.cn/wxy/img/logo.png">
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg leading-6 font-medium text-gray-900">闻湘月</h4>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        常德闻湘月特色小吃创办于2001年4月29日，品牌于2007年注册至今，闻湘月主营特色小吃+时尚快餐，发展至2017年在常德已拥有38家直营店，总经营面积4000多平方米，员工600多人
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-10 md:mt-0">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md  text-white">
                                        <img class="h-10 w-10" src="https://img5.tianyancha.com/logo/product/0944a006cf4ed154b39fcb68bf0f90d2.png@!f_200x200">
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg leading-6 font-medium text-gray-900">officebc</h4>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        OfficeBC 是专业的商务中心和联合办公在线租赁平台，免费提供商务中心办公室的租赁咨询、房源推荐、现场带看等一条龙服务，协助您找到合适的办公场所，并能够有效降低租金支出。
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-10 md:mt-0">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md text-white">
                                        <!-- Heroicon name: annotation -->
                                        <img class="h-10 w-10" src="http://hg.nreone.cn/img/log.png">
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg leading-6 font-medium text-gray-900">常德市海关</h4>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        常德海关地处常德市武陵区武陵大道，是隶属于长沙海关的正处级海关，于 1997年11月3日开关，关区管辖范围为常德市、张家界市、湘西自治州，共2市4区15县，辖区面积43311平方公里
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>





        </div>
    </div>

@endsection

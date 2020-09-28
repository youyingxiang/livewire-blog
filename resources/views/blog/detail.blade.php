@extends('blog.layout',['title'=>'博客详情'])

@section('content')
    <div class="bg-white max-w-3xl mx-auto px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <main>
            <article class="xl:divide-y xl:divide-gray-200">
                <header class="pt-5 xl:pb-5">
                    <div class="space-y-1 text-center">
                        <dl class="space-y-10">
                            <div>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-08-25T13:00:00.000Z">2020年10月1日</time>
                                </dd>
                            </div>
                        </dl>
                        <div>
                            <h1 class="text-2xl leading-9 font-extrabold text-gray-900 tracking-tight sm:leading-10  md:leading-14">
                                Laravel + Dcat admin 开发一个健壮的 erp 项目</h1>
                        </div>
                        <div class="mt-5">
                            <span class="inline-block bg-indigo-500 rounded-full px-3 py-2 text-sm font-semibold text-white">#winter</span>
                            <span class="inline-block bg-indigo-500 rounded-full px-3 py-2 text-sm font-semibold text-white">#travel</span>
                        </div>
                    </div>
                </header>
                <div class="divide-y xl:divide-y-0 divide-gray-200 xl:grid xl:grid-cols-4 xl:col-gap-6 pb-16 xl:pb-20"
                     style="grid-template-rows:auto 1fr">

                    <div class="divide-y divide-gray-200 xl:pb-0 xl:col-span-4 xl:row-span-2">
                        <div class="prose max-w-none pt-10 pb-8 pl-5 pr-5">
                            4 个月前我写过一篇文章 dcat-admin 开源框架在 erp 项目中的应用 在几个月前我只是用其完成一些功能开发。但是在项目健壮，以及代码如 dcat
                            一些深度结合上做的还是不够完善。这个几个月我重新在已有的经验上，对其进行了一些深入的整合。包括在 sass 方面的结合。已经代码健壮性方面的加强。

                            在这几个月我把 erp 常用的单据做成了一个 abstract class, 只要继承 OrderController
                            并实现其中的几个抽象方法。便可以得到一张单据的编辑创建。里面会自动包含单据常用的审核，删除，批量增加等。
                            抽象方法（我们业务逻辑只要展现数据，至于审核删除批量新增，我们封装好的进行统一管理比如审核的时候检测明细的业务数量是否为 0, 单据是否包含明细）

                            我们入库的时候，首先明细在批次库存进行加减，然后产品库存也会加减，涉及加减的都会插入一条库存往来账。而库存往来账的表，包含了批次库存以及产品库存发生变化所需要的字段，我们可以通过监听出入库订单审核状态的变化，比如审核通过，然后插入库存往来帐。再通过监听库存往来帐。进行批次库存的加减。在进行监听批次库存的加减进行产品库存的加减。

                            ————————————————
                            原文作者：youxx
                            转自链接：https://learnku.com/articles/49716
                            版权声明：著作权归作者所有。商业转载请联系作者获得授权，非商业转载请保留以上作者信息和原文链接。
                            4 个月前我写过一篇文章 dcat-admin 开源框架在 erp 项目中的应用 在几个月前我只是用其完成一些功能开发。但是在项目健壮，以及代码如 dcat
                            一些深度结合上做的还是不够完善。这个几个月我重新在已有的经验上，对其进行了一些深入的整合。包括在 sass 方面的结合。已经代码健壮性方面的加强。

                            在这几个月我把 erp 常用的单据做成了一个 abstract class, 只要继承 OrderController
                            并实现其中的几个抽象方法。便可以得到一张单据的编辑创建。里面会自动包含单据常用的审核，删除，批量增加等。
                            抽象方法（我们业务逻辑只要展现数据，至于审核删除批量新增，我们封装好的进行统一管理比如审核的时候检测明细的业务数量是否为 0, 单据是否包含明细）

                            我们入库的时候，首先明细在批次库存进行加减，然后产品库存也会加减，涉及加减的都会插入一条库存往来账。而库存往来账的表，包含了批次库存以及产品库存发生变化所需要的字段，我们可以通过监听出入库订单审核状态的变化，比如审核通过，然后插入库存往来帐。再通过监听库存往来帐。进行批次库存的加减。在进行监听批次库存的加减进行产品库存的加减。

                            ————————————————
                            原文作者：youxx
                            转自链接：https://learnku.com/articles/49716
                            版权声明：著作权归作者所有。商业转载请联系作者获得授权，非商业转载请保留以上作者信息和原文链接。
                        </div>
                    </div>

                </div>
            </article>
        </main>
    </div>
@endsection

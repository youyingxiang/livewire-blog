@extends('blog.layout',['title'=>'博客详情'])

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <main>
            <div class="divide-y divide-gray-200">
                <div class="pt-6 pb-8 space-y-2 md:space-y-5"><h1
                            class="text-2xl leading-9 font-extrabold text-indigo-600 tracking-tight sm:text-3xl sm:leading-10 md:text-3xl md:leading-14">
                        文章列表</h1>
                    <p class="text-lg leading-7 text-gray-500">顺序按发布时间排列</p></div>
                <ul class="divide-y divide-gray-200">
                    <li class="py-12">
                        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-09-23T18:30:00.000Z">September 24, 2020</time>
                                </dd>
                                <div class="py-4">
                                    <span class="inline-block bg-indigo-500 rounded-full px-3 py-2 text-sm font-semibold text-white mt-2">#travel</span>
                                    <span class="inline-block bg-indigo-500 rounded-full px-3 py-2 text-sm font-semibold text-white mt-2">#winter</span>
                                    <span class="inline-block bg-indigo-500 rounded-full px-3 py-2 text-sm font-semibold text-white mt-2">#travel</span>
                                    <span class="inline-block bg-indigo-500 rounded-full px-3 py-2 text-sm font-semibold text-white mt-2">#winter</span>
                                </div>
                            </dl>

                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                                                class="text-indigo-400 hover:text-indigo-600" href="/whats-new-in-tailwindcss-on-youtube">"What's
                                            new in Tailwind CSS?" on YouTube</a></h2>
                                    <div class="prose max-w-none text-gray-500"><p>A lot of cool stuff has been added to
                                            Tailwind since the last time we published any screencasts, so we thought it
                                            would be a great idea to record a little series that covers all of the new
                                            additions.</p>
                                        <p>
                                             is a series of 12 short videos that teach you
                                            everything you need to know about some of our favorite new Tailwind
                                            features.</p></div>
                                </div>
                                <div class="text-base leading-6 font-medium"><a
                                            class="text-indigo-400 hover:text-indigo-600"
                                            aria-label="Read &quot;&quot;What's new in Tailwind CSS?&quot; on YouTube&quot;"
                                            href="/whats-new-in-tailwindcss-on-youtube">Read more →</a></div>
                            </div>
                        </article>
                    </li>
                    <li class="py-12">
                        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-09-04T20:15:00.000Z">September 5, 2020</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                                                class="text-gray-900" href="/tailwindcss-1-8">Tailwind CSS v1.8.0</a>
                                    </h2>
                                    <div class="prose max-w-none text-gray-500"><p>Tailwind CSS v1.8 is now available
                                            with a handful of new utilities, a couple new features, and an exciting new
                                            experiment!</p></div>
                                </div>
                                <div class="text-base leading-6 font-medium"><a
                                            class="text-teal-500 hover:text-teal-600"
                                            aria-label="Read &quot;Tailwind CSS v1.8.0&quot;" href="/tailwindcss-1-8">Read
                                        more →</a></div>
                            </div>
                        </article>
                    </li>
                    <li class="py-12">
                        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-08-27T18:30:00.000Z">August 28, 2020</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                                                class="text-gray-900"
                                                href="/utility-friendly-transitions-with-tailwindui-react">Utility-Friendly
                                            Transitions with @tailwindui/react</a></h2>
                                    <div class="prose max-w-none text-gray-500"><p>Back in February we released <a
                                                    href="https://tailwindui.com">Tailwind UI</a>, a directory of HTML
                                            component examples designed for you to copy and paste into your Tailwind
                                            projects as a starting point for your own designs.</p>
                                        <p>We built Tailwind UI as an HTML-only, bring-your-own-JS product to make it as
                                            universal as possible, but many designs are inherently interactive and
                                            porting those interactive behaviors between JavaScript frameworks is
                                            unfortunately not always very easy.</p>
                                        <p>One example of this is enter/leave transitions, like when you toggle a
                                            dropdown menu and see it fade in and out.</p></div>
                                </div>
                                <div class="text-base leading-6 font-medium"><a
                                            class="text-teal-500 hover:text-teal-600"
                                            aria-label="Read &quot;Utility-Friendly Transitions with @tailwindui/react&quot;"
                                            href="/utility-friendly-transitions-with-tailwindui-react">Read more →</a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li class="py-12">
                        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-08-25T13:00:00.000Z">August 25, 2020</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                                                class="text-gray-900" href="/introducing-heroicons">Introducing
                                            Heroicons.com</a></h2>
                                    <div class="prose max-w-none text-gray-500"><p>A few months back we quietly released
                                            <a href="https://www.heroicons.com/">Heroicons</a>, a set of free SVG icons
                                            we initially designed to support the components in Tailwind UI. Today we’re
                                            launching the official <a href="https://www.heroicons.com/">Heroicons web
                                                experience</a>, which makes it easier than ever to search for icons and
                                            quickly copy them to your clipboard as Tailwind-ready HTML or JSX.</p></div>
                                </div>
                                <div class="text-base leading-6 font-medium"><a
                                            class="text-teal-500 hover:text-teal-600"
                                            aria-label="Read &quot;Introducing Heroicons.com&quot;"
                                            href="/introducing-heroicons">Read more →</a></div>
                            </div>
                        </article>
                    </li>
                    <li class="py-12">
                        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-08-18T19:15:00.000Z">August 19, 2020</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                                                class="text-gray-900" href="/tailwindcss-1-7">Tailwind CSS v1.7.0</a>
                                    </h2>
                                    <div class="prose max-w-none text-gray-500"><p>Another new Tailwind release is here!
                                            This time with support for gradients, background-clip, experimental support
                                            for using <code>@apply</code> with variant utilities, and tons more. Let's
                                            dig in!</p></div>
                                </div>
                                <div class="text-base leading-6 font-medium"><a
                                            class="text-teal-500 hover:text-teal-600"
                                            aria-label="Read &quot;Tailwind CSS v1.7.0&quot;" href="/tailwindcss-1-7">Read
                                        more →</a></div>
                            </div>
                        </article>
                    </li>
                    <li class="py-12">
                        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-08-10T13:30:00.000Z">August 10, 2020</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                                                class="text-gray-900" href="/from-900-to-1-how-we-hired-robin-malfait">From
                                            Nine Hundred to One: How We Hired Robin Malfait</a></h2>
                                    <div class="prose max-w-none text-gray-500"><p>Back in May we published <a
                                                    href="https://jobs.tailwindui.com/full-stack-developer">our first
                                                job posting</a> to help us find a full-stack developer to join our team.
                                        </p>
                                        <p>After receiving almost 900 applications and interviewing dozens of talented
                                            people, we're excited to finally share that <a
                                                    href="https://twitter.com/malfaitrobin">Robin Malfait</a> accepted
                                            our offer for the position and is officially part of the Tailwind Labs team
                                            as of today!</p></div>
                                </div>
                                <div class="text-base leading-6 font-medium"><a
                                            class="text-teal-500 hover:text-teal-600"
                                            aria-label="Read &quot;From Nine Hundred to One: How We Hired Robin Malfait&quot;"
                                            href="/from-900-to-1-how-we-hired-robin-malfait">Read more →</a></div>
                            </div>
                        </article>
                    </li>
                    <li class="py-12">
                        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-07-28T16:58:33.714Z">July 29, 2020</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                                                class="text-gray-900" href="/tailwindcss-1-6">Tailwind CSS v1.6.0</a>
                                    </h2>
                                    <div class="prose max-w-none text-gray-500"><p>It's like Tailwind CSS v1.5 except
                                            now there's animation support, overscroll utilities, and more!</p>
                                        <p>There aren't supposed to be any breaking changes here, but I thought that <a
                                                    href="https://github.com/tailwindlabs/tailwindcss/releases/tag/v1.5.0">last
                                                time</a> too. If I <em>did</em> break something, first person to report
                                            it gets a Tailwind shirt.</p></div>
                                </div>
                                <div class="text-base leading-6 font-medium"><a
                                            class="text-teal-500 hover:text-teal-600"
                                            aria-label="Read &quot;Tailwind CSS v1.6.0&quot;" href="/tailwindcss-1-6">Read
                                        more →</a></div>
                            </div>
                        </article>
                    </li>
                    <li class="py-12">
                        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-07-19T19:00:00.000Z">July 20, 2020</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                                                class="text-gray-900" href="/simon-vrachliotis-joins-tailwind-labs">Simon
                                            Vrachliotis Joins Tailwind Labs</a></h2>
                                    <div class="prose max-w-none text-gray-500"><p>Today we are super excited to share
                                            that <a href="https://twitter.com/simonswiss">Simon Vrachliotis</a> has
                                            joined the development team at Tailwind Labs! (We just finalized that new
                                            business name by the way, pretty cool right?)</p>
                                        <p>Simon has been a utility-first true believer since before Tailwind even
                                            existed, and authored an oft-referenced case study on his experience <a
                                                    href="https://hackernoon.com/full-re-write-with-tachyons-and-functional-css-a-case-study-part-1-635ccb5fb00b">rebuilding
                                                his company’s entire website with functional CSS in 10 days</a> way back
                                            in February 2017.</p></div>
                                </div>
                                <div class="text-base leading-6 font-medium"><a
                                            class="text-teal-500 hover:text-teal-600"
                                            aria-label="Read &quot;Simon Vrachliotis Joins Tailwind Labs&quot;"
                                            href="/simon-vrachliotis-joins-tailwind-labs">Read more →</a></div>
                            </div>
                        </article>
                    </li>
                    <li class="py-12">
                        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-07-18T15:43:02.988Z">July 18, 2020</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                                                class="text-gray-900"
                                                href="/welcoming-brad-cornes-to-the-tailwind-team">Welcoming Brad Cornes
                                            to the Team</a></h2>
                                    <div class="prose max-w-none text-gray-500"><p>Back in June, <a
                                                    href="https://twitter.com/bradlc">Brad Cornes</a> joined our company
                                            as our very first team member. We didn't have a blog to announce it back
                                            then, but better late than never right?</p>
                                        <p>You might know Brad as the creator of the amazing <a
                                                    href="https://marketplace.visualstudio.com/items?itemName=bradlc.vscode-tailwindcss">Tailwind
                                                CSS IntelliSense plugin</a> for VS Code, which he first released way
                                            back in 2018 and has since been installed over 100,000 times!</p></div>
                                </div>
                                <div class="text-base leading-6 font-medium"><a
                                            class="text-teal-500 hover:text-teal-600"
                                            aria-label="Read &quot;Welcoming Brad Cornes to the Team&quot;"
                                            href="/welcoming-brad-cornes-to-the-tailwind-team">Read more →</a></div>
                            </div>
                        </article>
                    </li>
                    <li class="py-12">
                        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-07-15T18:55:18.391Z">July 16, 2020</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                                                class="text-gray-900" href="/tailwindcss-1-5">Tailwind CSS v1.5.0</a>
                                    </h2>
                                    <div class="prose max-w-none text-gray-500"><p>I was hoping to save v1.5.0 for
                                            something <em>really</em> exciting but we needed a new feature to support
                                            the new <a href="https://github.com/tailwindcss/typography"><code>@tailwindcss/typography</code></a>
                                            plugin so h<!-- --> *<!-- --> ck it, we're dropping some new stuff on you
                                            early.</p>
                                        <p>No breaking changes, this is a minor release and we're professionals you
                                            silly goose.</p></div>
                                </div>
                                <div class="text-base leading-6 font-medium"><a
                                            class="text-teal-500 hover:text-teal-600"
                                            aria-label="Read &quot;Tailwind CSS v1.5.0&quot;" href="/tailwindcss-1-5">Read
                                        more →</a></div>
                            </div>
                        </article>
                    </li>
                    <li class="py-12">
                        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-07-13T16:35:02.037Z">July 14, 2020</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                                                class="text-gray-900" href="/tailwindcss-typography">Introducing
                                            Tailwind CSS Typography</a></h2>
                                    <div class="prose max-w-none text-gray-500"><p>Until now, trying to style an
                                            article, document, or blog post with Tailwind has been a tedious
                                            task that required a keen eye for typography and a lot of complex custom
                                            CSS.</p>
                                        <p>That's why today we're excited to release <a
                                                    href="https://github.com/tailwindcss/typography"><code>@tailwindcss/typography</code></a>
                                            — a plugin that lets you easily style vanilla HTML content with beautiful
                                            typographic defaults.</p></div>
                                </div>
                                <div class="text-base leading-6 font-medium"><a
                                            class="text-teal-500 hover:text-teal-600"
                                            aria-label="Read &quot;Introducing Tailwind CSS Typography&quot;"
                                            href="/tailwindcss-typography">Read more →</a></div>
                            </div>
                        </article>
                    </li>
                    <li class="py-12">
                        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-06-30T18:05:31Z">July 1, 2020</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                                                class="text-gray-900" href="/building-the-tailwind-blog">Building the
                                            Tailwind Blog with Next.js</a></h2>
                                    <div class="prose max-w-none text-gray-500"><p>One of the things we believe as a
                                            team is that everything we make should be <a
                                                    href="https://public.3.basecamp.com/p/toAcDMxu8Fvq2yMfd2azTuaV">sealed
                                                with a blog post</a>. Forcing ourselves to write up a short announcement
                                            post for every project we work on acts as a built-in quality check, making
                                            sure that we never call a project "done" until we feel comfortable telling
                                            the world it's out there.</p>
                                        <p>The problem was that up until today, we didn't actually have anywhere to
                                            publish those posts!</p></div>
                                </div>
                                <div class="text-base leading-6 font-medium"><a
                                            class="text-teal-500 hover:text-teal-600"
                                            aria-label="Read &quot;Building the Tailwind Blog with Next.js&quot;"
                                            href="/building-the-tailwind-blog">Read more →</a></div>
                            </div>
                        </article>
                    </li>
                    <li class="py-12">
                        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base leading-6 font-medium text-gray-500">
                                    <time datetime="2020-06-23T18:52:03Z">June 24, 2020</time>
                                </dd>
                                <div class="py-4">
                                    <span class="inline-block bg-indigo-500 rounded-full px-3 py-2 text-sm font-semibold text-white mt-2">#travel</span>
                                    <span class="inline-block bg-indigo-500 rounded-full px-3 py-2 text-sm font-semibold text-white mt-2">#winter</span>
                                    <span class="inline-block bg-indigo-500 rounded-full px-3 py-2 text-sm font-semibold text-white mt-2">#travel</span>
                                    <span class="inline-block bg-indigo-500 rounded-full px-3 py-2 text-sm font-semibold text-white mt-2">#winter</span>
                                    <span class="inline-block bg-indigo-500 rounded-full px-3 py-2 text-sm font-semibold text-white mt-2">#winter</span>
                                    <span class="inline-block bg-indigo-500 rounded-full px-3 py-2 text-sm font-semibold text-white mt-2">#winter</span>
                                    <span class="inline-block bg-indigo-500 rounded-full px-3 py-2 text-sm font-semibold text-white mt-2">#winter</span>
                                </div>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6"><h2 class="text-2xl leading-8 font-bold tracking-tight"><a
                                                class="text-gray-900"
                                                href="/introducing-linting-for-tailwindcss-intellisense">Introducing
                                            linting for Tailwind CSS IntelliSense</a></h2>
                                    <div class="prose max-w-none text-gray-500"><p>Today we’re releasing a new version
                                            of the <a
                                                    href="https://marketplace.visualstudio.com/items?itemName=bradlc.vscode-tailwindcss">Tailwind
                                                CSS IntelliSense extension for Visual Studio Code</a> that adds
                                            Tailwind-specific linting to both your CSS and your markup.</p></div>
                                </div>
                                <div class="text-base leading-6 font-medium"><a
                                            class="text-teal-500 hover:text-teal-600"
                                            aria-label="Read &quot;Introducing linting for Tailwind CSS IntelliSense&quot;"
                                            href="/introducing-linting-for-tailwindcss-intellisense">Read more →</a>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
        </main>
    </div>

@endsection

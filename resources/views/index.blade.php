<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <title>James Gifford</title>

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Raleway:300,500,800|Source+Sans+Pro:100,300,400,600,700,900" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="css/slides.css" name="main-styles">
        <link rel="stylesheet" href="css/styles.css" name="main-styles">

        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="js/plugins.js" type="text/javascript" name="plugins"></script>
        <script src="js/slides.js" type="text/javascript" name="main-scripts"></script>
    </head>

    <body class="slides whiteSlide animated">
        <!-- SVG Library -->
        <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
            <symbol id="close" viewBox="0 0 30 30"><path d="M15 0c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15zm5.7 19.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3s-.5-.1-.7-.3l-4.3-4.3-4.3 4.3c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4l4.3-4.3-4.3-4.3c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l4.3 4.3 4.3-4.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-4.3 4.3 4.3 4.3z"/></symbol>
            <symbol id="back" viewBox="0 0 20 20"><path d="M2.3 10.7l5 5c.4.4 1 .4 1.4 0s.4-1 0-1.4l-3.3-3.3h11.6c.6 0 1-.4 1-1s-.4-1-1-1h-11.6l3.3-3.3c.4-.4.4-1 0-1.4-.2-.2-.4-.3-.7-.3s-.5.1-.7.3l-5 5c-.2.2-.3.5-.3.7 0 .2.1.5.3.7z"/></symbol>
            <symbol id="menu" viewBox="0 0 22 22"><path d="M1 5h20c.6 0 1-.4 1-1s-.4-1-1-1h-20c-.6 0-1 .4-1 1s.4 1 1 1zm20 5h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1zm0 7h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1z"/></symbol>
            <symbol id="facebook" viewBox="0 0 24 24"><path d="M24 1.3v21.3c0 .7-.6 1.3-1.3 1.3h-6.1v-9.3h3.1l.5-3.6h-3.6v-2.2c0-1.1.3-1.8 1.8-1.8h1.9v-3.2c-.3 0-1.5-.1-2.8-.1-2.8 0-4.7 1.7-4.7 4.8v2.7h-3.1v3.6h3.1v9.2h-11.5c-.7 0-1.3-.6-1.3-1.3v-21.4c0-.7.6-1.3 1.3-1.3h21.3c.8 0 1.4.6 1.4 1.3z"/></symbol>
            <symbol id="fb-like" viewBox="0 0 20 20"><path d="M0 8v12h5v-12h-5zm2.5 10.8c-.4 0-.8-.3-.8-.8 0-.4.3-.8.8-.8s.8.3.8.8c0 .4-.4.8-.8.8zm3.5-.8h9.5c1.1 0 1.7-1 1.7-1.7 0-.3-.4-1-.4-1 1.4-.3 1.7-1.2 1.7-1.7-.1-.5-.3-.9-.5-1 1-.4 1.5-1.1 1.4-1.9-.1-.8-1-1.5-1-1.5 1-.6.9-1.5.9-1.5-.3-1.3-1.5-1.7-1.7-1.7h-5.6s.3-.5.3-2.4-1.3-3.6-2.6-3.6c0 0-.7.1-1 .3v3.5l-2.7 4.4v9.8z"/></symbol>
            <symbol id="twitter" viewBox="0 1 24 23"><path d="M21.5 7.6v.6c0 6.6-5 14.1-14 14.1-2.8 0-5.4-.8-7.6-2.2l1.2.1c2.3 0 4.4-.8 6.1-2.1-2.2 0-4-1.5-4.6-3.4.3.1.6.1.9.1.5 0 .9-.1 1.3-.2-2.1-.6-3.8-2.6-3.8-5 .7.4 1.4.6 2.2.6-1.3-.9-2.2-2.4-2.2-4.1 0-.9.2-1.8.7-2.5 2.4 3 6.1 5 10.2 5.2-.1-.4-.1-.7-.1-1.1 0-2.7 2.2-5 4.9-5 1.4 0 2.7.6 3.6 1.6 1-.3 2.1-.7 3-1.3-.4 1.2-1.1 2.1-2.2 2.7 1-.1 1.9-.4 2.8-.8-.6 1.1-1.4 2-2.4 2.7z"/></symbol>
            <symbol id="linkedin" viewBox="0 0 24 24"><path d="M22.2 0h-20.4c-1 0-1.8.8-1.8 1.7v20.7c0 1 .8 1.7 1.8 1.7h20.5c1 0 1.8-.8 1.8-1.7v-20.7c-.1-.9-.9-1.7-1.9-1.7zm-14.9 20.2h-3.6v-10.9h3.6v10.9zm-1.8-12.4c-1.2 0-2-.8-2-1.9 0-1.1.8-1.9 2.1-1.9 1.2 0 2 .8 2 1.9-.1 1.1-.9 1.9-2.1 1.9zm14.8 12.4h-3.6v-5.8c0-1.5-.5-2.5-1.8-2.5-1 0-1.6.7-1.9 1.3-.1.2-.1.6-.1.9v6.1h-3.6v-10.9h3.6v1.5c.5-.7 1.3-1.8 3.3-1.8 2.4 0 4.2 1.6 4.2 4.9v6.3z"/></symbol>
            <symbol id="arrow-down" viewBox="0 0 24 24"><path d="M12 18c-.2 0-.5-.1-.7-.3l-11-10c-.4-.4-.4-1-.1-1.4.4-.4 1-.4 1.4-.1l10.4 9.4 10.3-9.4c.4-.4 1-.3 1.4.1.4.4.3 1-.1 1.4l-11 10c-.1.2-.4.3-.6.3z"/></symbol>
            <symbol id="arrow-up" viewBox="0 0 24 24"><path d="M11.9 5.9c.2 0 .5.1.7.3l11 10c.4.4.4 1 .1 1.4-.4.4-1 .4-1.4.1l-10.4-9.4-10.3 9.4c-.4.4-1 .3-1.4-.1-.4-.4-.3-1 .1-1.4l11-10c.1-.2.4-.3.6-.3z"/></symbol>
            <symbol id="arrow-left" viewBox="0 0 31 72"><path d="M30 72c-.3 0-.6-.1-.8-.4l-29-34c-.3-.4-.3-.9 0-1.3l29-36c.3-.4 1-.5 1.4-.2.4.3.5 1 .2 1.4l-28.5 35.5 28.5 33.4c.4.4.3 1.1-.1 1.4-.2.1-.5.2-.7.2z"/></symbol>
            <symbol id="arrow-right" viewBox="0 0 31 72"><path d="M1 0c.3 0 .6.1.8.4l29 34c.3.4.3.9 0 1.3l-29 36c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l28.5-35.5-28.5-33.4c-.4-.4-.3-1.1.1-1.4.2-.1.5-.2.7-.2z"/></symbol>
            <symbol id="arrow-top" viewBox="0 0 24 24"><path d="M20.7 10.3l-8-8c-.4-.4-1-.4-1.4 0l-8 8c-.4.4-.4 1 0 1.4s1 .4 1.4 0l6.3-6.3v15.6c0 .6.4 1 1 1s1-.4 1-1v-15.6l6.3 6.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4z"/></symbol>
        </svg>

        <!-- Navigation -->
        <nav class="side">
            <div class="navigation">
                <ul></ul>
            </div>
        </nav>

        <!-- Header -->
        <nav class="panel top forceMobileView">
            <div class="sections desktop">
                <div class="left">
                    <ul class="menu crop">
                        <li><a href="#home"><img src="/img/logo.png" style="width: 2em;" /></a></li>
                    </ul>
                </div>
                <div class="right">
                    <ul class="menu crop">
                        <li><a href="{{ env('SOCIAL_FACEBOOK') }}" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use></svg></a></li>
                        <li><a href="{{ env('SOCIAL_TWITTER') }}" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a></li>
                        <li><a href="{{ env('SOCIAL_LINKEDIN') }}" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use></svg></a></li>
                    </ul>
                </div>
            </div>
            <div class="sections compact hidden">
                <div class="left"><a href="http://jamesgifford.com"><img src="/img/logo.png" style="width: 2em;" /></a></div>
                <div class="right">
                    <ul class="menu crop">
                        <li><a href="{{ env('SOCIAL_FACEBOOK') }}" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use></svg></a></li>
                        <li><a href="{{ env('SOCIAL_TWITTER') }}" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a></li>
                        <li><a href="{{ env('SOCIAL_LINKEDIN') }}" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use></svg></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Home -->
        <section class="slide fade kenBurns">
            <div class="content">
                <div class="container">
                    <div class="wrap">
                        <div class="fix-10-12">
                            <div class="h1 ae-1">James Gifford</div>
                            <div class="ae-2">
                                <p class="hero cropBottom">That's me!</p>
                                <br />
                                <p class="hero cropBottom">Check out the links below to learn more about who I am and how I spend my time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background" style="background-image:url(/img/home-bg3.jpg)"></div>
        </section>

        <!-- Working -->
        <section class="slide fade kenBurns">
            <div class="content">
                <div class="container">
                    <div class="wrap">
                        <div class="fix-12-12">
                            <ul class="grid">
                                <li class="col-6-12 cell-17">
                                    <ul class="grid">
                                        <li class="col-11-12 toLeft">
                                            <div class="ae-1 fromCenter" data-popup-id="17-2">
                                                <a href="http://jamesgifford.net"><img class="wide" src="/img/working-image.jpg" alt="Working"/></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-6-12 left">
                                    <h1 class="small ae-2 fromRight">Working</h1>
                                    <div class="ae-3 fromRight">
                                        <p>Code-slinger, database-wrangler, app-builder. I'm all of those and more. If you're looking for a programmer then I'm your man.</p>
                                    </div>
                                    <a href="http://jamesgifford.net" class="button round uppercase cyan ae-4 fromCenter cropBottom">See More Of My Work</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background" style="background-image:url(/img/working-bg.jpg)"></div>
        </section>

        <!-- Running -->
        <section class="slide fade kenBurns">
            <div class="content">
                <div class="container">
                    <div class="wrap">
                        <div class="fix-12-12">
                            <ul class="grid">
                                <li class="col-6-12 cell-17">
                                    <ul class="grid">
                                        <li class="col-11-12 toLeft">
                                            <div class="ae-1 fromCenter" data-popup-id="17-2">
                                                <a href="http://milesandmedals.com"><img class="wide" src="/img/running-image.jpg" alt="Running"/></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-6-12 left">
                                    <h1 class="small ae-2 fromRight">Running</h1>
                                    <div class="ae-3 fromRight">
                                        <p>There's something about sweating and gasping for hours that makes me really feel alive. Plus the medals look great on my wall.</p>
                                    </div>
                                    <a href="http://milesandmedals.com" class="button round uppercase lightGreen ae-4 fromCenter cropBottom">See How I Run</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background" style="background-image:url(/img/running-bg.jpg)"></div>
        </section>

        <!-- Traveling -->
        <section class="slide fade kenBurns">
            <div class="content">
                <div class="container">
                    <div class="wrap">
                        <div class="fix-12-12">
                            <ul class="grid">
                                <li class="col-6-12 cell-17">
                                    <ul class="grid">
                                        <li class="col-11-12 toLeft">
                                            <div class="ae-1 fromCenter" data-popup-id="17-2">
                                                <a href="http://jamesjourneys.com"><img class="wide" src="/img/traveling-image.jpg" alt="Traveling"/></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-6-12 left">
                                    <h1 class="small ae-2 fromRight">Traveling</h1>
                                    <div class="ae-3 fromRight">
                                        <p>It's always good to get away from routine and experience something new. It's even better to take pictures while doing so.</p>
                                    </div>
                                    <a href="http://jamesjourneys.com" class="button round uppercase deepOrange ae-4 fromCenter cropBottom">See Where I've Been</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background" style="background-image:url(/img/traveling-bg.jpg)"></div>
        </section>

        <!-- Contact -->
        <section class="slide fade kenBurns">
            <div class="content">
                <div class="container">
                    <div class="wrap">
                        <h1 class="small ae-1">Say Hello</h1>
                        <div class="ae-2"><p>Got any comments or questions? Let me know!</p></div>
                        <div class="fix-6-12 box-55">
                            <div class="pad shadow selected ae-3">
                                <form id="my-contact-form" action="/send_email" method="post" class="wide center">
                                    <label class="uppercase ae-4" for="name55">Your name</label>
                                    <input class="stroke round ae-5 wide" id="name55" type="name" name="name" placeholder="Name" required/>
                                    <label class="uppercase ae-6" for="email55">Email</label>
                                    <input class="stroke round ae-7 wide" id="email55" type="email" name="email" placeholder="Email" required/>
                                    <label class="uppercase ae-8" for="message55">Message</label>
                                    <textarea class="stroke round left ae-9" id="message55" type="text" name="message" placeholder="Message" required></textarea>
                                    <input class="button wide amber round uppercase ae-10 button-55" type="submit" name="submit" value="Send message" data-success-text="Done!" data-success-class="green"/>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background" style="background-image:url(/img/home-bg.jpg)"></div>
        </section>

        <!-- Bottom navigation -->
        <nav class="panel bottom">
            <div class="sections">
                <div class="center"><span class="nextSlide"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down"></use></svg></span></div>
            </div>
        </nav>

        <!-- Preloader -->
        <div class="loadingIcon"><svg class="loading-icon" id="loading-circle" viewBox="0 0 18 18"><circle class="circle" opacity=".1" stroke="#fff" stroke-width="2" stroke-miterlimit="10" cx="9" cy="9" r="8" fill="none"></circle><circle class="dash" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="1,100" cx="9" cy="9" r="8" fill="none"></circle></svg></div>
    </body>
</html>

<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('website.title', 'ocliuziyang')}}</title>

        <!-- Fonts -->
        <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFF;
                background-image: url({{ config('website.backgroundImage') }});
                background-size:100% 100%;
                background-repeat: no-repeat;
                color: #F2F2F2;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
            }

            .subtitle {
                font-size: 44px;
                margin: 0;
            }

            .links > a {
                color: #F2F2F2;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .panel {
                max-width: 600px;
                max-height: 300px;
                position:absolute;
                left:0; right:0; top:0; bottom:0;
                margin: auto;
            }
        </style>
    </head>
    <body>
    <div id="particles-js"></div>
    <div class="panel">
        <div class="content">
            <div class="title m-b-md">
                叼着一根草 <p class="subtitle">浪迹天涯</p>
            </div>

            <div class="links">
                <a href="{{ config('website.link.blog') }}" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i> Blog</a>
                <a href="{{ config('website.link.github') }}" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
                <a href="{{ config('website.link.weibo') }}" target="_blank"><i class="fa fa-weibo" aria-hidden="true"></i> Weibo</a>
                <a href="{{ config('website.link.jianshu') }}" target="_blank"><i class="fa fa-book" aria-hidden="true"></i> Jianshu</a>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script>
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
        </script>
    </body>
</html>

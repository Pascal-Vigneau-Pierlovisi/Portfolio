<!-- resources/views/home.blade.php -->

@extends('base')
@section('content')

<!-- Section Projects -->
<section class="section" id="projects">
    <div class="container">
        <h2 class="title has-text-centered">Projects</h2>
        <!-- Filter Menu -->
        <div class="tabs is-centered">
            <ul>
                <li class="is-active" data-filter="all"><a>All</a></li>
                <li data-filter="php"><a>PHP</a></li>
                <li data-filter="python"><a>Python</a></li>
                <li data-filter="other"><a>Other</a></li>
            </ul>
        </div>
        <!-- Projects Grid -->
        <div class="columns is-multiline" id="projects-grid">
            <!-- Project Card - Add 'data-category' attribute to filter -->
            <div class="column is-one-quarter" data-category="php">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/img/D.png" alt="Digifoto-Sport.com V1 Project">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <p class="title is-5">Digifoto-Sport V1 Project</p>
                            <p class="subtitle is-6">Redesign of the Digifoto-Sport website</p>
                            <a href="/project-DV1" class="button is-white is-outlined">
                                <span>Learn More</span>
                                <span class="icon">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter" data-category="python">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/img/Aniki.png" alt="Aniki-bot">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <p class="title is-5">Aniki Discord Bot</p>
                            <p class="subtitle is-6">Creation of a discord bot for the Aniki brand</p>
                            <a href="#" class="button is-white is-outlined">
                                <span>Learn More</span>
                                <span class="icon">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter" data-category="php">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/img/logo.png" alt="Portfolio Project">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <p class="title is-5">Portfolio Project</p>
                            <p class="subtitle is-6">Creation of my portfolio to present myself digitally</p>
                            <a href="#" class="button is-white is-outlined">
                                <span>Learn More</span>
                                <span class="icon">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter" data-category="php">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/img/scala.png" alt="Scala Project">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <p class="title is-5">Scala Project</p>
                            <p class="subtitle is-6">Development of the back of a data processing application</p>
                            <a href="#" class="button is-white is-outlined">
                                <span>Learn More</span>
                                <span class="icon">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter" data-category="other">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/img/fullstack.png" alt="FullStack Project">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <p class="title is-5">First Full-Stack Project</p>
                            <p class="subtitle is-6">Realization of my first fullstack web application</p>
                            <a href="#" class="button is-white is-outlined">
                                <span>Learn More</span>
                                <span class="icon">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter" data-category="other">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/img/kaktuns.png" alt="Kaktuns Project">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <p class="title is-5">Kaktuns Project</p>
                            <p class="subtitle is-6">Creation of a multimedia player for a school project</p>
                            <a href="#" class="button is-white is-outlined">
                                <span>Learn More</span>
                                <span class="icon">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter" data-category="php">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/img/DV2.png" alt="Digifoto-Sport V2 Project">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <p class="title is-5">Digifoto-Sport V2 Project</p>
                            <p class="subtitle is-6">Realization of digifoto-sport version V2 with more recent technologies</p>
                            <a href="#" class="button is-white is-outlined">
                                <span>Learn More</span>
                                <span class="icon">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat for other projects and categories -->
        </div>
    </div>
</section>

@endsection
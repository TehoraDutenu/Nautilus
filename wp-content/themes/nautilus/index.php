<?php get_header() ?>   
   
<main>
    <section id="intro" class="py-3">
        <div class="home-container d-flex flex-row">
            <div id="description">
                <h4 class="home-title">Tiers-lieu culturel à Perpignan</h4>
                <p class="home-p">
                Une ancienne discothèque emblématique du quartier Saint-Martin réhabilitée pour les acteurs associatifs, culturels et économiques de la région.
                Des espaces de coworking modulables permettant de se retrouver pour travailler, discuter, se former, et partager des projets collectifs dans un écosystème dédié.
                </p>
                <button class="home-button">Embarquez à bord du Nautilus</button>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/images/le-nautilus-accueil-illustration.jpg' ?>" alt='Nautilus'>
        </div>
    </section>
    <section id="agenda" class="py-5 d-flex justify-content-center">
        <div class="agenda-container">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23009688&ctz=Europe%2FParis&showCalendars=0&showTabs=0&showPrint=0&mode=AGENDA&showDate=0&showNav=0&showTitle=0&src=YmNlNmNlYzE1MTcwZDc3ODIyZTM5ZjNmNTU0YWUzZTlkMzNlM2ZkMmFkYzFkZDhhNjZmNGU3MDQ5MDU3ZTQ3Y0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZnIuZnJlbmNoI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23F6BF26&color=%23AD1457" style="border-width:0" width="900" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </section>
    <section id="service" class="py-5">
        <div class="container">
            <div class="section-heading text-center">
                <h2>
                    Du <strong>Coworking</strong> et des <strong>Événements</strong>
                </h2>
                <p class="mt-3 mb-5">Description</p>
            </div>
            <div class="row section-content">
                <div class="col-12 col-md-4 pb-4">
                    <div class="card h-100"  id="service-case">
                        <div class="card-body text-center">
                            <h3>Coworking</h3>
                            <p class="card-text">Un openspace pour initier et encourager des dynamiques de travail en groupe ou en solo...</p>
                            <a href="#" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 pb-4">
                    <div class="card h-100" id="service-case">
                        <div class="card-body text-center">
                            <h3>Espaces</h3>
                            <p class="card-text">Des espaces modulaires en fonction des besoins des adhérents et des voyageurs, nous adaptons les espaces pour un atelier Yoga, un salon de massage, un espace de réunion, un karaoké, un local de répétition</p>
                            <a href="#" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 pb-4">
                    <div class="card h-100" id="service-case">
                        <div class="card-body text-center">
                            <h3>Événements</h3>
                            <p class="card-text">Description</p>
                            <a href="#" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="newsletter" class="py-5">
        <div class="container d-flex flex-row">
            <div class="row section-heading text-center" style="padding: 80px;">
                <h2>Restez informé avec la newsletter du Nautilus</h2>
                <p>Description</p>
            </div>
            <div class="row section-content mx-5" style="width: 850px;">
                <form>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="firstname">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 600px;">Je m'inscris</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>

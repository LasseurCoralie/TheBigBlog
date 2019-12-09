<div class="container">
        <section class="article-zn container-fluid">
            <div class="title-section-zn">
                <div class="title-section-border"></div>
                <h2 class="title-section">latest articles</h2>
                <div class="title-section-border"></div>
            </div>
            
            <div class="all-articles-zn row">
            <?php foreach($viewVars['articles'] as $article) :?>
                <div class="one-article-layout col-md-6 col-lg-4">
                    <div class="article-category-zn">
                        <div class="border-title-category category-one"></div>
                        <h4 class="category-text category-one-title"><?= $article->getCategory() ?></h3>
                    </div>
                    <div class="article-txt-zn">
                        <h3 class="title-article"><?= $article->getTitle() ?></h3>
                        <p class="article-txt-info"><?= $article->getAuthor() ?> - <?= $article->getPublished_date() ?></p>
                        <p class="article-txt-main"><?= $article->getResume()?></p>
                    </div>
                    <a href="article.html" class="article-txt-more article-txt-more-one">Read more</a>
                </div>
            <?php endforeach; ?>
            
                <!-- <div class="one-article-layout col-md-6 col-lg-4">
                    <div class="article-category-zn">
                        <div class="border-title-category category-two"></div>
                        <h4 class="category-text category-two-title">category two</h3>
                    </div>
                    <div class="article-txt-zn">
                        <h3 class="title-article">It's about making placeholder</h3>
                        <p class="article-txt-info">David Johnson - Posted: 27/11/2019</p>
                        <p class="article-txt-main">Temporehendae lam fugit, quae laccus expedit fugit est, idem etum aut id quas ea nonet etur quae pa endit ? Bitatetur, nobitem eaque il est, quisciis aut aut lia sunt volorestrum, que anda conetus doluptatia dolluptaecus intios netur...</p>
                    </div>
                    <a href="#" class="article-txt-more article-txt-more-two">Read more</a>
                </div>

                <div class="one-article-layout col-md-6 col-lg-4">
                    <div class="article-category-zn">
                        <div class="border-title-category category-three"></div>
                        <h4 class="category-text category-three-title">category three</h3>
                    </div>
                    <div class="article-txt-zn">
                        <h3 class="title-article">I know words</h3>
                        <p class="article-txt-info">Donald Prumpt - Posted: 24/11/2019</p>
                        <p class="article-txt-main">Undanduciae eium quaessinum sum volut int qui solo berem cora consequi officipsum vendite porpos ab im es etustrum nemqui velisquae quae pa endit, aritibusdam accati aut ut et et vellessero corupicil iliquae que nos re maios molum simus et, explabo...</p>
                    </div>
                    <a href="#" class="article-txt-more article-txt-more-three">Read more</a>
                </div>

                <div class="one-article-layout col-md-6 col-lg-4">
                    <div class="article-category-zn">
                        <div class="border-title-category category-two"></div>
                        <h4 class="category-text category-two-title">category two</h3>
                    </div>
                    <div class="article-txt-zn">
                        <h3 class="title-article">I'm the best thing</h3>
                        <p class="article-txt-info">Bill Muray - Posted: 15/11/2019</p>
                        <p class="article-txt-main">Cae optae elias ea acerchita secat landae etur, nimilitibus quis prem quatur mi, cum et doluptam, omnis pro que estibus.Hendae non nimusae volor rerrunt esequi am im...</p>
                    </div>
                    <a href="#" class="article-txt-more article-txt-more-two">Read more</a>
                </div>
    
                <div class="one-article-layout col-md-6 col-lg-4">
                    <div class="article-category-zn">
                        <div class="border-title-category category-for"></div>
                        <h4 class="category-text category-for-title">category for</h3>
                    </div>
                    <div class="article-txt-zn">
                        <h3 class="title-article">Dumb or var_dump</h3>
                        <p class="article-txt-info">Jack Twat - Posted: 15/11/2019</p>
                        <p class="article-txt-main">Undanduciae eium quaessinum sum volut int qui solo berem cora consequi officipsum vendite porpos ab im es etustrum nemqui velisquae quae pa endit, aritibusdam accati aut ut et et vellessero corupicil iliquae que nos re maios molum simus et, explabo...</p>
                    </div>
                    <a href="#" class="article-txt-more article-txt-more-for">Read more</a>
                </div>

                <div class="one-article-layout col-md-6 col-lg-4">
                    <div class="article-category-zn">
                        <div class="border-title-category category-one"></div>
                        <h4 class="category-text category-one-title">category one</h3>
                    </div>
                    <div class="article-txt-zn">
                        <h3 class="title-article">Is there someone here?</h3>
                        <p class="article-txt-info">Megan Davis - Posted: 11/11/2019</p>
                        <p class="article-txt-main">Ota sus nis et volupit eatistius iduntibus nossimusapis quid esti. Riat periore ptatis di ipicides utem dolorep eribus, occab illuptatque consequi deliqui berumquidunt, culloresciur ame quibusant quam aut opta experum cumet quis rae por rerspere aliberu ntotati ntiustiam, iuria cus aut deruptas doluptat...</p>
                    </div>
                    <a href="#" class="article-txt-more article-txt-more-one">Read more</a>
                </div> -->

                <div class="button-div button-more-articles-zn">
                    <button type="button" class="button" id="button-more-articles">
                        More articles
                    </button>
                </div>
            </div>
        </section>

        <section class="section-about d-none d-md-block">
            <div class="header-title-zn">
                <p class="header-main-title header-main-title-sm header-main-title-sm-orange header-main-title-md">The Big Blog</h1>
            </div>
            <div class="about-txt-zn">
                <p class="about-txt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime quasi explicabo consequuntur illum? Quisquam, asperiores sit. Fugiat, et quos adipisci animi quae magni omnis aspernatur, ad iusto ullam nisi, architecto ea totam sint esse officia blanditiis corporis molestiae voluptate! A cupiditate expedita ea et nobis. Eum, distinctio! Id velit repudiandae, voluptatum perspiciatis voluptates veritatis dignissimos! Minus neque vitae nostrum accusantium similique nam nobis et, reprehenderit hic fugiat, totam ex exercitationem, laboriosam aliquam quas tempore explicabo.</p>
            </div>
            <div class="container">
                <div class="about-picto-zn row">
                    <div class="picto-txt">
                        <img class="about-picto-img-zn" src="<?= $absoluteUrl?>/assets/images/articles.svg" alt="articles">
                        <p class="about-picto-txt-zn">572 articles</p>
                    </div>
                    <div class="picto-txt">
                        <img class="about-picto-img-zn" src="<?= $absoluteUrl?>/assets/images/people.svg" alt="people">
                        <p class="about-picto-txt-zn">26 authors</p>
                    </div>
                    <div class="picto-txt">
                        <img class="about-picto-img-zn" src="<?= $absoluteUrl?>/assets/images/words.svg" alt="words">
                        <p class="about-picto-txt-zn">16 649 words</p>
                    </div>
                </div>
            </div>
            
        </section>

        <section class="section-join-us">
            <div class="title-section-zn">
                <div class="title-section-border"></div>
                <h2 class="title-section">join us & share a story</h2>
                <div class="title-section-border"></div>
            </div>

            <div class="section-join-us-buttons-both-zn">
                <div class="button-div section-join-us-button-zn">
                    <button type="button" class="button section-join-us-button-layout">
                        Log in
                    </button>
                </div>

                <p class="section-join-us-p">or</p>

                <div class="button-div section-join-us-button-zn">
                    <button type="button" class="button section-join-us-button-layout">
                        Sign in
                    </button>
                </div>
            </div>
        </section>
    </div>
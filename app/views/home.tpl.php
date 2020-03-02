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
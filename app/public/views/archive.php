<section class="mt-4 container mx-auto px-2 lg:max-w-5xl">
    <h2 class="text-xl text-brand-yellow mb-4"><?= $props['page_title'] ?></h2>
    <ul class="post-list">
        <?php foreach($props['articles'] as $article) : ?>
            <li class="bg-slate-800 rounded-xl transform transition ring ring-slate-800 hover:ring-slate-600 grid sm:grid-cols-7 gap-4 mb-4">
                <div class="sm:col-span-3 [&>a>img]:w-full [&>a>img]:h-full [&>a>img]:object-contain">
                    <a href="/<?= $article['slug'] ?>">
                    <img src="<?= $article['featured_image'] ?>" alt="<?= $article['title'] ?>" class="rounded-l-xl">
                    </a>
                </div>

                <div class="p-4 space-y-2 sm:col-span-4">
                    <small><?= $article['published_date'] ?></small>
                    <?php if($article['published_date'] !== $article['modified_date']) : ?>
                    <small>, updated on: <?= $article['modified_date'] ?></small>
                    <?php endif; ?>
                    <h2>
                        <a href="/<?= $article['slug'] ?>/" class="text-2xl font-bold text-gray-100 hover:text-brand-yellow"><?= $article['title'] ?></a>
                    </h2>

                    <div><?= $article['excerpt'] ?></div>

                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <ul class="pagination flex justify-between py-4">
        <li>
            <a href="<?php echo $props['page_no'] > 2 ? "{$props['url_base']}/page/" . $props['page_no'] - 1 . "/" : "{$props['url_base']}/" ?>" class="text-gray-100 hover:text-brand-yellow">&larr; Previous</a>
        </li>
        <li><a href="<?php echo $props['page_no'] < $props['total_pages'] ? "{$props['url_base']}/page/" . $props['page_no'] + 1 . "/" : '#' ?>" class="text-gray-100 hover:text-brand-yellow">Next &rarr;</a></li>
    </ul>
</section>
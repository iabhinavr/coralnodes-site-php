<section class="mt-4 container mx-auto px-2 lg:max-w-5xl">
    <ul class="post-list">
        <?php foreach($props['articles'] as $article) : ?>
            <li class="bg-slate-800 rounded-xl transform transition ring ring-slate-800 hover:ring-slate-600 grid sm:grid-cols-7 gap-4 mb-4">
                <div class="sm:col-span-3 [&>a>img]:w-full [&>a>img]:h-full [&>a>img]:object-contain">
                    <a href="/<?= $article['slug'] ?>">
                    <img src="<?= $article['featured_image'] ?>" loading="lazy" alt="<?= $article['title'] ?>" class="rounded-l-xl">
                    </a>
                </div>

                <div class="p-4 space-y-2 sm:col-span-4">
                    <small>
                        <?= $article['published_date'] ?>
                    </small>
                    <h2>
                        <a href="/<?= $article['slug'] ?>/" class="text-2xl font-bold text-gray-100 hover:text-brand-yellow"><?= $article['title'] ?></a>
                    </h2>

                    <div><?= $article['excerpt'] ?></div>

                    <div class="flex justify-between">
                        <div>
                            <?php foreach($article['tags'] as $tag) : ?>
                                <a href="/tag/<?= $tag['name'] ?>/" class="font-bold hover:text-brand-yellow transition">#<?= $tag['name'] ?></a>
                            <?php endforeach; ?>
                        </div>
                        <div>
                            <?php foreach($article['categories'] as $category) : ?>
                                <a href="/category/<?= $category['name'] ?>/" class="font-bold hover:text-brand-yellow transition">[<?= $category['title'] ?>]</a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <ul class="pagination flex justify-between py-4">
        <li>
            <a href="<?php echo $props['page_no'] > 2 ? "/articles/page/" . $props['page_no'] - 1 . "/" : "/articles/" ?>" class="text-gray-100 hover:text-brand-yellow">&larr; Previous</a>
        </li>
        <li><a href="<?php echo $props['page_no'] < $props['total_pages'] ? "/articles/page/" . $props['page_no'] + 1 . "/" : '#' ?>" class="text-gray-100 hover:text-brand-yellow">Next &rarr;</a></li>
    </ul>
</section>
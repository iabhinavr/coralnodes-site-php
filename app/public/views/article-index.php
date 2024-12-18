<section class="mt-4 container mx-auto px-2 lg:max-w-5xl">
    <ul class="post-list">
        <?php foreach($props['articles'] as $article) : ?>
            <li class="bg-slate-800 rounded-xl transform transition ring ring-slate-800 hover:ring-slate-600 grid sm:grid-cols-7 gap-4 mb-4">

                <?php if (!empty($article['featured_image'])) : ?>
                <div class="sm:col-span-3">
                    <a href="/<?= $article['slug'] ?>">
                    <img src="https://cdn-2.coralnodes.com/coralnodes/uploads/medium/<?= $article['featured_image'] ?>" loading="lazy" alt="<?= $article['title'] ?>" class="rounded-l-xl w-full h-full object-cover">
                    </a>
                </div>
                <?php endif; ?>

                <div class="p-4 space-y-2 <?= empty($article['featured_image']) ? 'sm:col-span-7' : 'sm:col-span-4' ?>">
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
                                <a href="/tag/<?= $tag['name'] ?>/" class="font-bold text-emerald-400 hover:text-brand-yellow transition">#<?= $tag['name'] ?></a>
                            <?php endforeach; ?>
                        </div>
                        <div>
                            <?php foreach($article['categories'] as $category) : ?>
                                <a href="/category/<?= $category['name'] ?>/" class="font-bold text-brand-lightcoral hover:text-brand-yellow transition">[<?= $category['title'] ?>]</a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <ul class="pagination flex justify-between py-4">
        <li>
            <a href="<?php echo $props['page_no'] > 2 ? "/blog/page/" . $props['page_no'] - 1 . "/" : "/blog/" ?>" class="text-gray-100 hover:text-brand-yellow">&larr; Newer</a>
        </li>
        <li><a href="<?php echo $props['page_no'] < $props['total_pages'] ? "/blog/page/" . $props['page_no'] + 1 . "/" : '#' ?>" class="text-gray-100 hover:text-brand-yellow">Older &rarr;</a></li>
    </ul>
</section>
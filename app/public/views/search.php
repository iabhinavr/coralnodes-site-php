<section class="mt-4 container mx-auto px-2 lg:max-w-5xl">
    <?php if (empty($props['search_results'])) : ?>
        No results found related to your search word
    <?php else : ?>
    <ul class="post-list">
        <?php foreach($props['search_results'] as $s) : ?>
            <li class="bg-slate-800 rounded-xl transform transition ring ring-slate-800 hover:ring-slate-600 mb-4">

                <div class="p-4 space-y-2 sm:col-span-4">
                    <h2>
                        <a href="/<?= $s['slug'] ?>/" class="text-2xl font-bold text-gray-100 hover:text-brand-yellow"><?= $s['title'] ?></a>
                    </h2>

                    <div><?= $s['excerpt'] ?></div>

                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</section>
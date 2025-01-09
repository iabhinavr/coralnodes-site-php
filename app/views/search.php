<section class="mt-4 container mx-auto p-2 lg:max-w-5xl">
    <form action="/search/">
        <input type="text" name="keyword" value="<?= isset($_GET["keyword"]) ? _esc($_GET["keyword"]) : "" ?>" class="p-2 my-2 bg-slate-700 w-full" placeholder="search site...">
    </form>
    <?php if ($props['search_results'] === null) : ?>
        Type a keyword to begin searching...for example 'sorting algorithm'
    <?php elseif($props['search_results'] === false) : ?>
        No results found related to your search word
    <?php else : ?>
    <h2 class="font-mono py-2"><?= count($props['search_results']) ?> results found for <span class="text-emerald-400">'<?= htmlspecialchars(string: $_GET["keyword"], flags: ENT_QUOTES) ?>'</span></h2>
    <ul class="post-list">
        <?php foreach($props['search_results'] as $s) : ?>
            <li class="bg-slate-800 rounded-xl transform transition ring ring-slate-800 hover:ring-slate-600 mb-4">

                <div class="p-4 space-y-2 sm:col-span-4">
                    <h2>
                        <a href="/<?= $s['slug'] ?>/" class="text-2xl font-bold text-brand-yellow hover:text-brand-lightcoral"><?= $s['title'] ?></a>
                    </h2>

                    <div><?= $s['excerpt'] ?></div>

                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</section>
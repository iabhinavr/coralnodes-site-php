<article class="single-post-article" id="article-<?= $props['id'] ?>">
    <div class="h-[50vh] min-h-[15rem] mb-4 bg-slate-700">
        <div class="h-full container px-2 mx-auto flex justify-center flex-col lg:max-w-3xl">
            <h1 class="text-2xl font-bold py-4 text-brand-lightcoral">
                <?= $props['title'] ?>
            </h1>
            <div><small>Published by Abhinav / Last updated:
                    <?= $props['modified_date'] ?>
                </small></div>
            <p class="py-1 my-3 pl-3 text-2xl border-l-4 border-l-brand-yellow">
                <?= $props['excerpt'] ?>
            </p>
        </div>

    </div>
    <div class="post-content container mx-auto lg:max-w-3xl px-2 tracking-tight">
        <div>
            <?= $props['content_html'] ?>
        </div>
    </div>
</article>
<section id="author-bio" class="my-4">
    <div class="container mx-auto lg:max-w-3xl">
        <div class="flex items-center p-6 rounded-md bg-slate-800">
            <!-- Image on the left -->
            <div class="w-40">
                <img src="https://cdn-2.coralnodes.com/coralnodes/uploads/<?= $props['author_bio']['featured_image'] ?>" alt="Profile Image" class="block rounded-full object-cover">
            </div>

            <!-- Title and Description on the right -->
            <div class="ml-4">
                <h2 class="text-xl font-semibold">About <?= $props['author_bio']['title'] ?></h2>
                <p class="text-lg">
                    <?= $props['author_bio']['excerpt'] ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?php if(!empty($props['related_content'])) : ?>
<section>
    <div class="container mx-auto lg:max-w-3xl">
        <h2 class="text-2xl font-firacode font-bold py-2 pl-4 border-l-brand-yellow border-l-4 mb-4">Related articles:
        </h2>
        <ul class="grid p-4 gap-2 justify-center sm:grid-cols-3">
            
            <?php foreach ($props['related_content'] as $r): ?>
                <li class=" max-w-xs ">
                    <a href="/<?= $r['slug'] ?>/" class="hover:text-brand-yellow">
                        <img class="block rounded-md"
                            src="https://cdn-2.coralnodes.com/coralnodes/uploads/medium/<?= $r['featured_image'] ?>"
                            alt="<?= $r['title'] ?>">
                        <span class="block text-sm py-2 font-bold">
                            <?= $r['title'] ?>
                        </span>
                    </a>
                </li>
            <?php endforeach; ?> 
        </ul>
    </div>

</section>
<?php endif; ?>
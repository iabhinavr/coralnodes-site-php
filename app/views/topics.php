<section class="my-4 container mx-auto px-2 lg:max-w-5xl">
    Here is a list of all the topics published on this site.
    <h2 class="text-xl text-brand-yellow my-4">
        Categories
    </h2>

    <?php if ($props['categories']['status']) : ?>
    <ul class="topic-list">
    <?php foreach($props['categories']['result'] as $category) : ?>
        <li>
            <a href="/category/<?= $category['name'] ?>">
                <?= $category['title'] ?> (<?= $category['count'] ?>)
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    
    <h2 class="text-xl text-brand-yellow my-4">
        Tags
    </h2>

    <?php if ($props['tags']['status']) : ?>
    <ul class="topic-list">
    <?php foreach($props['tags']['result'] as $category) : ?>
        <li>
            <a href="/tag/<?= $category['name'] ?>">
                <?= $category['title'] ?> (<?= $category['count'] ?>)
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>

</section>
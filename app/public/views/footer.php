<footer id="site-footer" class="flex flex-col items-center bg-slate-800">
    <div class="py-4 px-4 flex flex-col items-center md:flex-row justify-between w-full bg-slate-700">
        <p>&copy; 2019-2024 Abhinav R</p>
        <ul class="flex flex-col items-center md:flex-row h-full [&>li>a]:flex [&>li>a]:h-full [&>li>a]:px-2 [&>li>a]:items-center [&>li>a:hover]:text-brand-pink [&>li>a]:transition text-sm tracking-tighter">
            <li><a href="/about/">About</a></li>
            <li><a href="/contact/">Contact</a></li>
            <li><a href="/disclosure/">Disclosure</a></li>
            <li><a href="/disclaimer/">Disclaimer</a></li>
            <li><a href="/privacy-policy/">Privacy Policy</a></li>
            <li><a href="/terms-and-conditions/">Terms &amp; Conditions</a></li>
        </ul>
    </div>
</footer>
<script src="<?= _cdn_('/assets/highlight/highlight-2.min.js') ?>"></script>
<script src="<?= _is_local() ? '/assets/frontend.js' : _cdn_('/assets/frontend.js') ?>"></script>
<script>hljs.highlightAll();</script>
</body>
</html>
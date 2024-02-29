<div class="footer-content__subcol">
    <div class="footer-content__subcol-top">
        <nav class="footer-content__nav">
            <?php foreach ($arResult['SECOND'] as $item): ?>
            <ul class="footer-content__nav-list">
                <li class="footer-nav__list-item">
                    <a class="footer-content__nav-item" href="<?=$item['LINK']?>"><?=$item['TEXT']?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</div>
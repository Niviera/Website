<?php foreach ($this->kategorien as $reihe): ?>
        <li> 
            <noscript>
                <a class="<?php echo $reihe[2] ?>" href="index.php?kategorie=<?php echo urlencode($reihe[0])?>&sucheingabe=<?php echo urlencode($reihe[3])?>">
                    <?php echo $reihe[1] ?>
                </a> 
            </noscript>
            <a id="<?php echo $reihe[0] ?>" class="hidden <?php echo $reihe[2] ?>" onclick="fun_test(<?php echo $reihe[0] ?>)">
                    <?php echo $reihe[1] ?>
            </a>           
        </li>
<?php endforeach; ?>   
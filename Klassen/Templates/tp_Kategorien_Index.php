<?php foreach ($this->kategorien as $reihe): ?>
        <li> 
            <a class="<?php echo $reihe[2] ?>" href="index.php?kategorie=<?php echo urlencode($reihe[0])?>&sucheingabe=<?php echo urlencode($reihe[3])?>">
                <?php echo $reihe[1] ?>
            </a> 
        </li>
<?php endforeach; ?>   
<nav id="menu" data-save-scroll>
    <?php $menu = [
        [ '', 'Dashboard' ],
        [ 'content', 'Content', [
            [ 'pages' ],
            [ 'uploads' ],
            [ 'forms' ],
            [ 'menus' ],
            [ 'translations' ],
            [ 'advanced' ],
        ] ],
        [ 'interface', 'Interface', [
            [ 'themes' ],
            [ 'basic' ],
            [ 'elements' ],
            [ 'headers' ],
            [ 'content' ],
            [ 'footers' ],
            [ 'advanced' ],
        ] ],
        [ 'users', 'Users' ],
        [ 'settings', 'Settings', [
            [ 'general' ],
            [ 'content' ],
            [ 'plugins' ],
            [ 'guide' ],
        ] ]
    ];
    foreach( $menu as $m ) {
        if( isset( $_GET['a'] ) ) {
            $mc = $_GET['a'] == $m[0] ? 'class="on"' : '';
        } else {
            $mc = $m[0] == '' ? 'class="on"' : '';
        }
        echo '<ul '.$mc.'><li><a href="'.APPURL.$m[0].'" '.$mc.'>'.$m[1].'</a>';
        if( isset( $m[2] ) ) {
            echo '<ul>';
            foreach( $m[2] as $sm ) {
                $msc = isset( $_GET['b'] ) && ($_GET['b'] == $sm[0]) && ($_GET['a'] == $m[0]) ? 'class="on"' : '';
                $name = isset( $sm[1] ) ? $sm[1] : ucfirst( $sm[0] );
                echo '<li><a href="'.APPURL.$m[0].'/'.$sm[0].'" '.$msc.'>'.$name.'</a>';
                echo '</li>';
            }
            echo '</ul>';
        }
        echo '</li></ul>';
    }
    ?>
</nav>
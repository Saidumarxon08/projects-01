
<table border="1">
    <div class="row">
    <tr>
        <h1>shahar1</h1>

        <th>Ism</th>
        <th>ko'chasi</th>
        <th>uyi</th>
        <th>telefon</th>
    </tr>
    </div>
    <?php
        foreach ($city_key['shahar1']['marg\'ilon']['bobur'] as $key => $value) {
            ?>
            <tr>
                <td><?=$key?></td>
                <td><?=$value['kochasi']?></td>
                <td><?=$value['uy nomeri']?></td>
                <td><?=$value['telefon']?></td>
            </tr>
            <?php
        }
        foreach ($city_key['shahar1']['marg\'ilon']['istiqlol'] as $key => $value) {
            ?>
            <tr>
                <td><?=$key?></td>
                <td><?=$value['kochasi']?></td>
                <td><?=$value['uy nomeri']?></td>
                <td><?=$value['telefon']?></td>
            </tr>
            <?php
        }
    ?>
</table>
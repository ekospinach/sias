<?php
echo $hasil . '<br>';
?>
<table border="1">
    <thead>
        <tr>
            <th>NIS</th>
            <th>Mapel</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Semester</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($result as $row) {
            echo '<tr>';
            echo '<td>' . $row['nis'] . '</td>';
            echo '<td>' . $row['id_mapel'] . '</td>';
            echo '<td>' . $row['id_kelas'] . '</td>';
            echo '<td>' . $row['nilai'] . '</td>';
            echo '<td>' . $row['semester'] . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

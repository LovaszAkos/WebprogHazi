<h1>Campusok listája</h1>
<?php echo anchor('campus/add', 'Hozzáadás'); ?>
<?php if($records == null || empty($records)): ?>
    <p>Nincs rögzítve egyetlen campus sem!</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Campus</th>
                <th>Épület Kódja</th>
                <th>Épület</th>
                <th>Épület Címe</th>
                <th>Művelet</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($records as &$record): ?>
            <tr>
                <td><?=$record->campus?></td>
                <td><?=$record->code?></td>
                <td><?=$record->épület?></td>
                <td><?=$record->hely?></td>
                <td>
                    <?php echo anchor('campus/'.$record->code,'Részletek');?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<h1>Topics</h1>
<table>
   <tr>
   <th>Title</th>
    <th>User ID</th>
    <th>Publised</th>
    <th>Created</th>
    <th>Modified</th>
   </tr>

   <?php foreach($topics as $topic) : ?>
   <tr>
        <td><?php echo $topic['Topic']['title']; ?></td>
        <td><?php echo $topic['Topic']['user_id']; ?></td>
        <td><?php echo $topic['Topic']['visible']; ?></td>
        <td><?php echo $topic['Topic']['created']; ?></td>
        <td><?php echo $topic['Topic']['modified']; ?></td>
   </tr>

   <?php endforeach; ?>
   <?php unset($topic); ?>
</table>
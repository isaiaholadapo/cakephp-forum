<h1>Topics</h1>
<table>
   <tr>
   <th>Title</th>
    <th>User ID</th>
    <th>Publised</th>
    <th>Created</th>
    <th>Modified</th>
    <th>Edit</th>
    <th>Delete</th>
   </tr>

   <?php foreach($topics as $topic) : ?>
   <tr>
        <td><?php echo $this->HTML->link($topic['Topic']['title'], array('controller' => 'topics', 'action' => 'view',  $topic['Topic']['id'])); ?></td>
        <td><?php echo $topic['Topic']['user_id']; ?></td>
        <td><?php echo $topic['Topic']['visible']; ?></td>
        <td><?php echo $topic['Topic']['created']; ?></td>
        <td><?php echo $topic['Topic']['modified']; ?></td>
        <td><?php echo $this->HTML->link('Edit', array('controller' => 'topics', 'action' => 'edit',  $topic['Topic']['id'])); ?></td>
        <td><?php echo $this->HTML->link('Delete', array('controller' => 'topics', 'action' => 'delete',  $topic['Topic']['id'])); ?></td>
   </tr>

   <?php endforeach; ?>
   <?php unset($topic); ?>
</table>
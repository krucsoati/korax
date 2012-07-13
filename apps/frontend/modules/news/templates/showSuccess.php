<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $news->getId() ?></td>
    </tr>
    <tr>
      <th>Create date:</th>
      <td><?php echo $news->getCreateDate() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('news/edit?id='.$news->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('news/index') ?>">List</a>

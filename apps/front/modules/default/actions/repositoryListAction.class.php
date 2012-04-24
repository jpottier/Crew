<?php

/**
 * repository actions.
 *
 * @package    crew
 * @subpackage repository
 * @author     Your name here
 */
class repositoryListAction extends crewAction
{
  public function execute($request)
  {
    $repositories = RepositoryQuery::create()->find();

    $this->repositories = array();
    foreach ($repositories as & $repository)
    {
      $branchesCount = BranchQuery::create()
        ->filterByRepositoryId($repository->getId())
        ->filterByIsBlacklisted(0)
        ->count()
      ;
      
      $this->repositories[] = array_merge($repository->toArray(), array('NbBranches' => $branchesCount));
    }

    $this->statusActions = StatusActionPeer::getStatusActionsForBoard();
    $this->commentBoards = CommentPeer::getCommentsForBoard();
  }
}

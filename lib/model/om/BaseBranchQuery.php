<?php


/**
 * Base class that represents a query for the 'branch' table.
 *
 * 
 *
 * @method     BranchQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     BranchQuery orderByStatusId($order = Criteria::ASC) Order by the status_id column
 * @method     BranchQuery orderByUserStatusChanged($order = Criteria::ASC) Order by the user_status_changed column
 * @method     BranchQuery orderByRepositoryId($order = Criteria::ASC) Order by the repository_id column
 * @method     BranchQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     BranchQuery orderByCommitReference($order = Criteria::ASC) Order by the commit_reference column
 * @method     BranchQuery orderByCommitStatusChanged($order = Criteria::ASC) Order by the commit_status_changed column
 * @method     BranchQuery orderByDateStatusChanged($order = Criteria::ASC) Order by the date_status_changed column
 * @method     BranchQuery orderByIsBlacklisted($order = Criteria::ASC) Order by the is_blacklisted column
 * @method     BranchQuery orderByReviewRequest($order = Criteria::ASC) Order by the review_request column
 *
 * @method     BranchQuery groupById() Group by the id column
 * @method     BranchQuery groupByStatusId() Group by the status_id column
 * @method     BranchQuery groupByUserStatusChanged() Group by the user_status_changed column
 * @method     BranchQuery groupByRepositoryId() Group by the repository_id column
 * @method     BranchQuery groupByName() Group by the name column
 * @method     BranchQuery groupByCommitReference() Group by the commit_reference column
 * @method     BranchQuery groupByCommitStatusChanged() Group by the commit_status_changed column
 * @method     BranchQuery groupByDateStatusChanged() Group by the date_status_changed column
 * @method     BranchQuery groupByIsBlacklisted() Group by the is_blacklisted column
 * @method     BranchQuery groupByReviewRequest() Group by the review_request column
 *
 * @method     BranchQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BranchQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BranchQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BranchQuery leftJoinStatus($relationAlias = null) Adds a LEFT JOIN clause to the query using the Status relation
 * @method     BranchQuery rightJoinStatus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Status relation
 * @method     BranchQuery innerJoinStatus($relationAlias = null) Adds a INNER JOIN clause to the query using the Status relation
 *
 * @method     BranchQuery leftJoinsfGuardUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUser relation
 * @method     BranchQuery rightJoinsfGuardUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUser relation
 * @method     BranchQuery innerJoinsfGuardUser($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUser relation
 *
 * @method     BranchQuery leftJoinRepository($relationAlias = null) Adds a LEFT JOIN clause to the query using the Repository relation
 * @method     BranchQuery rightJoinRepository($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Repository relation
 * @method     BranchQuery innerJoinRepository($relationAlias = null) Adds a INNER JOIN clause to the query using the Repository relation
 *
 * @method     BranchQuery leftJoinBranchComment($relationAlias = null) Adds a LEFT JOIN clause to the query using the BranchComment relation
 * @method     BranchQuery rightJoinBranchComment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BranchComment relation
 * @method     BranchQuery innerJoinBranchComment($relationAlias = null) Adds a INNER JOIN clause to the query using the BranchComment relation
 *
 * @method     BranchQuery leftJoinFile($relationAlias = null) Adds a LEFT JOIN clause to the query using the File relation
 * @method     BranchQuery rightJoinFile($relationAlias = null) Adds a RIGHT JOIN clause to the query using the File relation
 * @method     BranchQuery innerJoinFile($relationAlias = null) Adds a INNER JOIN clause to the query using the File relation
 *
 * @method     Branch findOne(PropelPDO $con = null) Return the first Branch matching the query
 * @method     Branch findOneOrCreate(PropelPDO $con = null) Return the first Branch matching the query, or a new Branch object populated from the query conditions when no match is found
 *
 * @method     Branch findOneById(int $id) Return the first Branch filtered by the id column
 * @method     Branch findOneByStatusId(int $status_id) Return the first Branch filtered by the status_id column
 * @method     Branch findOneByUserStatusChanged(int $user_status_changed) Return the first Branch filtered by the user_status_changed column
 * @method     Branch findOneByRepositoryId(int $repository_id) Return the first Branch filtered by the repository_id column
 * @method     Branch findOneByName(string $name) Return the first Branch filtered by the name column
 * @method     Branch findOneByCommitReference(string $commit_reference) Return the first Branch filtered by the commit_reference column
 * @method     Branch findOneByCommitStatusChanged(string $commit_status_changed) Return the first Branch filtered by the commit_status_changed column
 * @method     Branch findOneByDateStatusChanged(string $date_status_changed) Return the first Branch filtered by the date_status_changed column
 * @method     Branch findOneByIsBlacklisted(int $is_blacklisted) Return the first Branch filtered by the is_blacklisted column
 * @method     Branch findOneByReviewRequest(int $review_request) Return the first Branch filtered by the review_request column
 *
 * @method     array findById(int $id) Return Branch objects filtered by the id column
 * @method     array findByStatusId(int $status_id) Return Branch objects filtered by the status_id column
 * @method     array findByUserStatusChanged(int $user_status_changed) Return Branch objects filtered by the user_status_changed column
 * @method     array findByRepositoryId(int $repository_id) Return Branch objects filtered by the repository_id column
 * @method     array findByName(string $name) Return Branch objects filtered by the name column
 * @method     array findByCommitReference(string $commit_reference) Return Branch objects filtered by the commit_reference column
 * @method     array findByCommitStatusChanged(string $commit_status_changed) Return Branch objects filtered by the commit_status_changed column
 * @method     array findByDateStatusChanged(string $date_status_changed) Return Branch objects filtered by the date_status_changed column
 * @method     array findByIsBlacklisted(int $is_blacklisted) Return Branch objects filtered by the is_blacklisted column
 * @method     array findByReviewRequest(int $review_request) Return Branch objects filtered by the review_request column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseBranchQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBranchQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Branch', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BranchQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BranchQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BranchQuery) {
			return $criteria;
		}
		$query = new BranchQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Branch|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BranchPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BranchPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BranchPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BranchPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the status_id column
	 * 
	 * @param     int|array $statusId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByStatusId($statusId = null, $comparison = null)
	{
		if (is_array($statusId)) {
			$useMinMax = false;
			if (isset($statusId['min'])) {
				$this->addUsingAlias(BranchPeer::STATUS_ID, $statusId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($statusId['max'])) {
				$this->addUsingAlias(BranchPeer::STATUS_ID, $statusId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BranchPeer::STATUS_ID, $statusId, $comparison);
	}

	/**
	 * Filter the query on the user_status_changed column
	 * 
	 * @param     int|array $userStatusChanged The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByUserStatusChanged($userStatusChanged = null, $comparison = null)
	{
		if (is_array($userStatusChanged)) {
			$useMinMax = false;
			if (isset($userStatusChanged['min'])) {
				$this->addUsingAlias(BranchPeer::USER_STATUS_CHANGED, $userStatusChanged['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userStatusChanged['max'])) {
				$this->addUsingAlias(BranchPeer::USER_STATUS_CHANGED, $userStatusChanged['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BranchPeer::USER_STATUS_CHANGED, $userStatusChanged, $comparison);
	}

	/**
	 * Filter the query on the repository_id column
	 * 
	 * @param     int|array $repositoryId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByRepositoryId($repositoryId = null, $comparison = null)
	{
		if (is_array($repositoryId)) {
			$useMinMax = false;
			if (isset($repositoryId['min'])) {
				$this->addUsingAlias(BranchPeer::REPOSITORY_ID, $repositoryId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($repositoryId['max'])) {
				$this->addUsingAlias(BranchPeer::REPOSITORY_ID, $repositoryId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BranchPeer::REPOSITORY_ID, $repositoryId, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BranchPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the commit_reference column
	 * 
	 * @param     string $commitReference The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByCommitReference($commitReference = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($commitReference)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $commitReference)) {
				$commitReference = str_replace('*', '%', $commitReference);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BranchPeer::COMMIT_REFERENCE, $commitReference, $comparison);
	}

	/**
	 * Filter the query on the commit_status_changed column
	 * 
	 * @param     string $commitStatusChanged The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByCommitStatusChanged($commitStatusChanged = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($commitStatusChanged)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $commitStatusChanged)) {
				$commitStatusChanged = str_replace('*', '%', $commitStatusChanged);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BranchPeer::COMMIT_STATUS_CHANGED, $commitStatusChanged, $comparison);
	}

	/**
	 * Filter the query on the date_status_changed column
	 * 
	 * @param     string|array $dateStatusChanged The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByDateStatusChanged($dateStatusChanged = null, $comparison = null)
	{
		if (is_array($dateStatusChanged)) {
			$useMinMax = false;
			if (isset($dateStatusChanged['min'])) {
				$this->addUsingAlias(BranchPeer::DATE_STATUS_CHANGED, $dateStatusChanged['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateStatusChanged['max'])) {
				$this->addUsingAlias(BranchPeer::DATE_STATUS_CHANGED, $dateStatusChanged['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BranchPeer::DATE_STATUS_CHANGED, $dateStatusChanged, $comparison);
	}

	/**
	 * Filter the query on the is_blacklisted column
	 * 
	 * @param     int|array $isBlacklisted The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByIsBlacklisted($isBlacklisted = null, $comparison = null)
	{
		if (is_array($isBlacklisted)) {
			$useMinMax = false;
			if (isset($isBlacklisted['min'])) {
				$this->addUsingAlias(BranchPeer::IS_BLACKLISTED, $isBlacklisted['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isBlacklisted['max'])) {
				$this->addUsingAlias(BranchPeer::IS_BLACKLISTED, $isBlacklisted['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BranchPeer::IS_BLACKLISTED, $isBlacklisted, $comparison);
	}

	/**
	 * Filter the query on the review_request column
	 * 
	 * @param     int|array $reviewRequest The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByReviewRequest($reviewRequest = null, $comparison = null)
	{
		if (is_array($reviewRequest)) {
			$useMinMax = false;
			if (isset($reviewRequest['min'])) {
				$this->addUsingAlias(BranchPeer::REVIEW_REQUEST, $reviewRequest['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($reviewRequest['max'])) {
				$this->addUsingAlias(BranchPeer::REVIEW_REQUEST, $reviewRequest['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BranchPeer::REVIEW_REQUEST, $reviewRequest, $comparison);
	}

	/**
	 * Filter the query by a related Status object
	 *
	 * @param     Status $status  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByStatus($status, $comparison = null)
	{
		return $this
			->addUsingAlias(BranchPeer::STATUS_ID, $status->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Status relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function joinStatus($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Status');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Status');
		}
		
		return $this;
	}

	/**
	 * Use the Status relation Status object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    StatusQuery A secondary query class using the current class as primary query
	 */
	public function useStatusQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinStatus($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Status', 'StatusQuery');
	}

	/**
	 * Filter the query by a related sfGuardUser object
	 *
	 * @param     sfGuardUser $sfGuardUser  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUser($sfGuardUser, $comparison = null)
	{
		return $this
			->addUsingAlias(BranchPeer::USER_STATUS_CHANGED, $sfGuardUser->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUser relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function joinsfGuardUser($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardUser');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'sfGuardUser');
		}
		
		return $this;
	}

	/**
	 * Use the sfGuardUser relation sfGuardUser object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinsfGuardUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardUser', 'sfGuardUserQuery');
	}

	/**
	 * Filter the query by a related Repository object
	 *
	 * @param     Repository $repository  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByRepository($repository, $comparison = null)
	{
		return $this
			->addUsingAlias(BranchPeer::REPOSITORY_ID, $repository->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Repository relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function joinRepository($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Repository');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Repository');
		}
		
		return $this;
	}

	/**
	 * Use the Repository relation Repository object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RepositoryQuery A secondary query class using the current class as primary query
	 */
	public function useRepositoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinRepository($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Repository', 'RepositoryQuery');
	}

	/**
	 * Filter the query by a related BranchComment object
	 *
	 * @param     BranchComment $branchComment  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByBranchComment($branchComment, $comparison = null)
	{
		return $this
			->addUsingAlias(BranchPeer::ID, $branchComment->getBranchId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the BranchComment relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function joinBranchComment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('BranchComment');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'BranchComment');
		}
		
		return $this;
	}

	/**
	 * Use the BranchComment relation BranchComment object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BranchCommentQuery A secondary query class using the current class as primary query
	 */
	public function useBranchCommentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinBranchComment($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'BranchComment', 'BranchCommentQuery');
	}

	/**
	 * Filter the query by a related File object
	 *
	 * @param     File $file  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function filterByFile($file, $comparison = null)
	{
		return $this
			->addUsingAlias(BranchPeer::ID, $file->getBranchId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the File relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function joinFile($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('File');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'File');
		}
		
		return $this;
	}

	/**
	 * Use the File relation File object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    FileQuery A secondary query class using the current class as primary query
	 */
	public function useFileQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinFile($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'File', 'FileQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Branch $branch Object to remove from the list of results
	 *
	 * @return    BranchQuery The current query, for fluid interface
	 */
	public function prune($branch = null)
	{
		if ($branch) {
			$this->addUsingAlias(BranchPeer::ID, $branch->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBranchQuery
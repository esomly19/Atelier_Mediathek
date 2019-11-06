<?php

namespace Illuminate\Database\Query;

use Closure;

class JoinClause extends Builder
{
    /**
     * The type of join being performed.
     *
     * @var string
     */
    public $type;

    /**
     * The table the join clause is joining to.
     *
     * @var string
     */
    public $table;

    /**
<<<<<<< HEAD
     * The connection of the parent query builder.
     *
     * @var \Illuminate\Database\ConnectionInterface
     */
    protected $parentConnection;

    /**
     * The grammar of the parent query builder.
     *
     * @var \Illuminate\Database\Query\Grammars\Grammar
     */
    protected $parentGrammar;

    /**
     * The processor of the parent query builder.
     *
     * @var \Illuminate\Database\Query\Processors\Processor
     */
    protected $parentProcessor;

    /**
     * The class name of the parent query builder.
     *
     * @var string
     */
    protected $parentClass;
=======
     * The parent query builder instance.
     *
     * @var \Illuminate\Database\Query\Builder
     */
    private $parentQuery;
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Create a new join clause instance.
     *
     * @param  \Illuminate\Database\Query\Builder $parentQuery
     * @param  string  $type
     * @param  string  $table
     * @return void
     */
    public function __construct(Builder $parentQuery, $type, $table)
    {
        $this->type = $type;
        $this->table = $table;
<<<<<<< HEAD
        $this->parentClass = get_class($parentQuery);
        $this->parentGrammar = $parentQuery->getGrammar();
        $this->parentProcessor = $parentQuery->getProcessor();
        $this->parentConnection = $parentQuery->getConnection();

        parent::__construct(
            $this->parentConnection, $this->parentGrammar, $this->parentProcessor
=======
        $this->parentQuery = $parentQuery;

        parent::__construct(
            $parentQuery->getConnection(), $parentQuery->getGrammar(), $parentQuery->getProcessor()
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
        );
    }

    /**
     * Add an "on" clause to the join.
     *
     * On clauses can be chained, e.g.
     *
     *  $join->on('contacts.user_id', '=', 'users.id')
     *       ->on('contacts.info_id', '=', 'info.id')
     *
     * will produce the following SQL:
     *
<<<<<<< HEAD
     * on `contacts`.`user_id` = `users`.`id` and `contacts`.`info_id` = `info`.`id`
=======
     * on `contacts`.`user_id` = `users`.`id`  and `contacts`.`info_id` = `info`.`id`
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     *
     * @param  \Closure|string  $first
     * @param  string|null  $operator
     * @param  string|null  $second
     * @param  string  $boolean
     * @return $this
     *
     * @throws \InvalidArgumentException
     */
    public function on($first, $operator = null, $second = null, $boolean = 'and')
    {
        if ($first instanceof Closure) {
            return $this->whereNested($first, $boolean);
        }

        return $this->whereColumn($first, $operator, $second, $boolean);
    }

    /**
     * Add an "or on" clause to the join.
     *
     * @param  \Closure|string  $first
     * @param  string|null  $operator
     * @param  string|null  $second
     * @return \Illuminate\Database\Query\JoinClause
     */
    public function orOn($first, $operator = null, $second = null)
    {
        return $this->on($first, $operator, $second, 'or');
    }

    /**
     * Get a new instance of the join clause builder.
     *
     * @return \Illuminate\Database\Query\JoinClause
     */
    public function newQuery()
    {
<<<<<<< HEAD
        return new static($this->newParentQuery(), $this->type, $this->table);
=======
        return new static($this->parentQuery, $this->type, $this->table);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }

    /**
     * Create a new query instance for sub-query.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    protected function forSubQuery()
    {
<<<<<<< HEAD
        return $this->newParentQuery()->newQuery();
    }

    /**
     * Create a new parent query instance.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    protected function newParentQuery()
    {
        $class = $this->parentClass;

        return new $class($this->parentConnection, $this->parentGrammar, $this->parentProcessor);
=======
        return $this->parentQuery->newQuery();
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }
}

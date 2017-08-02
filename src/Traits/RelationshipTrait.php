<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories\Traits;

use Illuminate\Database\Eloquent\Model;

trait RelationshipTrait
{
    /**
     * @param $modelOrId
     * @param $relation
     * @param Model $relationModel
     * @param array $joining
     * @param bool  $touch
     *
     * @return mixed
     */
    public function saveRelation($modelOrId, $relation, Model $relationModel, array $joining = [], $touch = true)
    {
        if (! $modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->save($relationModel, $joining, $touch);
    }

    /**
     * @param $modelOrId
     * @param $relation
     * @param array $models
     * @param array $joinings
     *
     * @return mixed
     */
    public function saveRelations($modelOrId, $relation, array $models, array $joinings = [])
    {
        if (! $modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->saveMany($models, $joinings);
    }

    /**
     * @param $modelOrId
     * @param $relation
     * @param Model $relationModel
     *
     * @return mixed
     */
    public function associateRelation($modelOrId, $relation, Model $relationModel)
    {
        if (! $modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->associate($relationModel);
    }

    /**
     * @param $modelOrId
     * @param $relation
     * @param $relationId
     * @param array $attributes
     * @param bool  $touch
     *
     * @return mixed
     */
    public function attachRelation($modelOrId, $relation, $relationId, array $attributes = [], $touch = true)
    {
        if (! $modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->attach($relationId, $attributes, $touch);
    }

    /**
     * @param $modelOrId
     * @param $relation
     * @param array $ids
     * @param bool  $touch
     *
     * @return mixed
     */
    public function detachRelation($modelOrId, $relation, $ids = [], $touch = true)
    {
        if (! $modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->detach($ids, $touch);
    }

    /**
     * @param $modelOrId
     * @param $relation
     * @param $ids
     * @param bool $detaching
     *
     * @return mixed
     */
    public function syncRelation($modelOrId, $relation, $ids, $detaching = true)
    {
        if (! $modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->sync($ids, $detaching);
    }

    /**
     * @param $modelOrId
     * @param $relation
     * @param $relationId
     * @param array $attributes
     * @param bool  $touch
     *
     * @return mixed
     */
    public function updateExistingPivot($modelOrId, $relation, $relationId, array $attributes, $touch = true)
    {
        if (! $modelOrId instanceof Model) {
            $modelOrId = $this->requireById($modelOrId);
        }

        return $modelOrId->{$relation}->updateExistingPivot($relationId, $attributes, $touch);
    }

    /**
     * @param Model $model
     * @param $relation
     *
     * @return mixed
     */
    public function getRelation(Model $model, $relation)
    {
        return $model->{$relation};
    }

    /**
     * @param Model $model
     * @param $relation
     * @param int    $perPage
     * @param string $orderBy
     * @param string $orderByDirection
     *
     * @return mixed
     */
    public function getRelationPaginated(Model $model, $relation, $perPage = 10, $orderBy = 'created_at', $orderByDirection = 'desc')
    {
        return $model->{$relation}()->orderBy($orderBy, $orderByDirection)->paginate($perPage);
    }
}

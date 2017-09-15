<?php
/**
 * @author: dengyun
 * @time: 2017/9/15 11:47
 */

namespace frontend\services;


class Options extends \common\services\Options
{
    public static function getCategoryNodes()
    {
        $params = [
            'group' => self::CONTENT_CATEGORY_GROUP,
            'is_deleted' => 0,
        ];
        $data = self::find()->select('id,name,option_key')->where($params)->asArray()->all();
        $nodes = [];
        //每个节点的父节点
        $nodeMap = [];
        foreach ($data as $row) {
            $nodes[$row['id']] = [
                'name' => $row['name'],
                'id' => $row['id'],
            ];
            $nodeMap[$row['option_key']][] = $row['id'];
        }
        return self::getChildNode($nodeMap[0],$nodeMap,$nodes);
    }

    private static function getChildNode($childNodes, $nodeMap,$nodes)
    {
        $nodeTree = [];
        foreach ($childNodes as $nodeId) {
            $node = $nodes[$nodeId];
            //有子节点
            if (isset($nodeMap[$nodeId])) {
                $node['childNode'] = self::getChildNode($nodeMap[$nodeId], $nodeMap,$nodes);
            }
            $nodeTree[] = $node;
        }
        return $nodeTree;
    }
}
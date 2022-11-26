/**
  В базе данных имеется таблица с товарами `goods` (id INTEGER, name TEXT),
таблица с тегами `tags` (id INTEGER, name TEXT) и таблица связи товаров и тегов
`goods_tags` (tag_id INTEGER, goods_id INTEGER, UNIQUE(tag_id, goods_id)).
Выведите id и названия всех товаров, которые имеют все возможные теги в этой базе.

# CREATE TABLE goods (id INTEGER, name TEXT);
# CREATE TABLE tags (id INTEGER, name TEXT);
# CREATE TABLE goods_tags (tag_id INTEGER, goods_id INTEGER, UNIQUE(tag_id, goods_id));
#
# INSERT INTO tags(id, name) VALUES(1, 'tag1');
# INSERT INTO tags(id, name) VALUES(2, 'tag2');
# INSERT INTO tags(id, name) VALUES(3, 'tag3');
#
# INSERT INTO goods(id, name) VALUES (1, 'good1');
# INSERT INTO goods(id, name) VALUES (2, 'good2');
# INSERT INTO goods(id, name) VALUES (3, 'good3');
#
# INSERT INTO goods_tags(tag_id, goods_id) VALUES (2, 1);
# INSERT INTO goods_tags(tag_id, goods_id) VALUES (1, 2);
# INSERT INTO goods_tags(tag_id, goods_id) VALUES (2, 2);
# INSERT INTO goods_tags(tag_id, goods_id) VALUES (3, 2);
# INSERT INTO goods_tags(tag_id, goods_id) VALUES (3, 3);

 */

SELECT goods_id, (SELECT name FROM goods WHERE id = goods_id) as goods_name
FROM goods_tags gt
WHERE (SELECT COUNT(id) FROM tags) = (SELECT COUNT(tag_id) FROM goods_tags WHERE goods_id = gt.goods_id)
GROUP BY goods_id


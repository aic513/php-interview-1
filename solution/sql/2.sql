/**
  Выбрать без join-ов и подзапросов все департаменты,
в которых есть мужчины, и все они (каждый) поставили высокую оценку (строго выше 5).

create table evaluations
(
    respondent_id uuid primary key, -- ID респондента
    department_id uuid,             -- ID департамента
    gender        boolean,          -- true — мужчина, false — женщина
    value         integer	    -- Оценка
);
 */

SELECT department_id,
       MIN(value) as min_value
FROM evaluations
WHERE gender = 1
GROUP BY department_id
HAVING min_value > 5;
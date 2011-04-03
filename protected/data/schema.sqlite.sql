
CREATE TABLE IF NOT EXISTS 'bz_user'
(
  'id' INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  'email' VARCHAR(256) NOT NULL,
  'username' VARCHAR(128) NOT NULL,
  'password' VARCHAR(128) NOT NULL,
  'profile' TEXT
  'last_login_time' DATETIME,
  'create_time' DATETIME,
  'create_user_id' INTEGER,
  'update_time' DATETIME,
  'update_user_id' INTEGER
);

CREATE TABLE IF NOT EXISTS 'bz_backlog'
(
  'id' INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  'name' VARCHAR(256) NOT NULL,
  'description' TEXT,
  'create_time' DATETIME,
  'create_user_id' INTEGER,
  'update_time' DATETIME,
  'update_user_id' INTEGER
);

CREATE TABLE IF NOT EXISTS 'bz_item'
(
  'id' INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  'name' VARCHAR(256) NOT NULL,
  'description' TEXT,
  'tags' TEXT,
  'order' INTEGER,
  'backlog_id' INTEGER,
  'type_id' INTEGER,
  'status_id' INTEGER,
  'owner_id' INTEGER,
  'requester_id' INTEGER,
  'create_time' DATETIME,
  'create_user_id' INTEGER,
  'update_time' DATETIME,
  'update_user_id' INTEGER,
  CONSTRAINT FK_item_owner FOREIGN KEY (owner_id)
		REFERENCES bz_user (id) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT FK_item_requester FOREIGN KEY (requester_id)
		REFERENCES bz_user (id) ON DELETE CASCADE ON UPDATE RESTRICT
  CONSTRAINT FK_item_backlog FOREIGN KEY (backlog_id)
		REFERENCES bz_backlog (id) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE TABLE IF NOT EXISTS 'bz_backlog_user_assignment'
(
  'backlog_id' INTEGER NOT NULL,
  'user_id' INTEGER NOT NULL,
  'create_time' DATETIME,
  'create_user_id' INTEGER,
  'update_time' DATETIME,
  'update_user_id' INTEGER,
  PRIMARY KEY('backlog_id', 'user_id')
  CONSTRAINT FK_backlog_user FOREIGN KEY (backlog_id)
      REFERENCES bz_backlog (id) ON DELETE CASCADE ON UPDATE RESTRICT
  CONSTRAINT FK_user_backlog FOREIGN KEY (user_id)
      REFERENCES bz_user (id) ON DELETE CASCADE ON UPDATE RESTRICT
);

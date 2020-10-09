<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */

namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection alias
     * @property Grid\Column|Collection authors
     * @property Grid\Column|Collection enable
     * @property Grid\Column|Collection imported
     * @property Grid\Column|Collection config
     * @property Grid\Column|Collection require
     * @property Grid\Column|Collection require_dev
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection method
     * @property Grid\Column|Collection ip
     * @property Grid\Column|Collection input
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection is_link
     * @property Grid\Column|Collection link
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection url
     * @property Grid\Column|Collection introduce
     * @property Grid\Column|Collection image
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection category_id
     * @property Grid\Column|Collection is_hot
     * @property Grid\Column|Collection hot_image
     * @property Grid\Column|Collection post_id
     * @property Grid\Column|Collection tag_id
     * @property Grid\Column|Collection ip_address
     * @property Grid\Column|Collection user_agent
     * @property Grid\Column|Collection last_activity
     * @property Grid\Column|Collection driver
     * @property Grid\Column|Collection open_id
     * @property Grid\Column|Collection sequence
     * @property Grid\Column|Collection batch_id
     * @property Grid\Column|Collection family_hash
     * @property Grid\Column|Collection should_display_on_index
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection entry_uuid
     * @property Grid\Column|Collection tag
     * @property Grid\Column|Collection email_verified_at
     * @property Grid\Column|Collection profile_photo_path
     *
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection alias(string $label = null)
     * @method Grid\Column|Collection authors(string $label = null)
     * @method Grid\Column|Collection enable(string $label = null)
     * @method Grid\Column|Collection imported(string $label = null)
     * @method Grid\Column|Collection config(string $label = null)
     * @method Grid\Column|Collection require(string $label = null)
     * @method Grid\Column|Collection require_dev(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection method(string $label = null)
     * @method Grid\Column|Collection ip(string $label = null)
     * @method Grid\Column|Collection input(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection is_link(string $label = null)
     * @method Grid\Column|Collection link(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection url(string $label = null)
     * @method Grid\Column|Collection introduce(string $label = null)
     * @method Grid\Column|Collection image(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection category_id(string $label = null)
     * @method Grid\Column|Collection is_hot(string $label = null)
     * @method Grid\Column|Collection hot_image(string $label = null)
     * @method Grid\Column|Collection post_id(string $label = null)
     * @method Grid\Column|Collection tag_id(string $label = null)
     * @method Grid\Column|Collection ip_address(string $label = null)
     * @method Grid\Column|Collection user_agent(string $label = null)
     * @method Grid\Column|Collection last_activity(string $label = null)
     * @method Grid\Column|Collection driver(string $label = null)
     * @method Grid\Column|Collection open_id(string $label = null)
     * @method Grid\Column|Collection sequence(string $label = null)
     * @method Grid\Column|Collection batch_id(string $label = null)
     * @method Grid\Column|Collection family_hash(string $label = null)
     * @method Grid\Column|Collection should_display_on_index(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection entry_uuid(string $label = null)
     * @method Grid\Column|Collection tag(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     * @method Grid\Column|Collection profile_photo_path(string $label = null)
     */
    class Grid
    {
    }

    class MiniGrid extends Grid
    {
    }

    /**
     * @property Show\Field|Collection name
     * @property Show\Field|Collection version
     * @property Show\Field|Collection alias
     * @property Show\Field|Collection authors
     * @property Show\Field|Collection enable
     * @property Show\Field|Collection imported
     * @property Show\Field|Collection config
     * @property Show\Field|Collection require
     * @property Show\Field|Collection require_dev
     * @property Show\Field|Collection id
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection path
     * @property Show\Field|Collection method
     * @property Show\Field|Collection ip
     * @property Show\Field|Collection input
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection is_link
     * @property Show\Field|Collection link
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection url
     * @property Show\Field|Collection introduce
     * @property Show\Field|Collection image
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection content
     * @property Show\Field|Collection category_id
     * @property Show\Field|Collection is_hot
     * @property Show\Field|Collection hot_image
     * @property Show\Field|Collection post_id
     * @property Show\Field|Collection tag_id
     * @property Show\Field|Collection ip_address
     * @property Show\Field|Collection user_agent
     * @property Show\Field|Collection last_activity
     * @property Show\Field|Collection driver
     * @property Show\Field|Collection open_id
     * @property Show\Field|Collection sequence
     * @property Show\Field|Collection batch_id
     * @property Show\Field|Collection family_hash
     * @property Show\Field|Collection should_display_on_index
     * @property Show\Field|Collection type
     * @property Show\Field|Collection entry_uuid
     * @property Show\Field|Collection tag
     * @property Show\Field|Collection email_verified_at
     * @property Show\Field|Collection profile_photo_path
     *
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection alias(string $label = null)
     * @method Show\Field|Collection authors(string $label = null)
     * @method Show\Field|Collection enable(string $label = null)
     * @method Show\Field|Collection imported(string $label = null)
     * @method Show\Field|Collection config(string $label = null)
     * @method Show\Field|Collection require(string $label = null)
     * @method Show\Field|Collection require_dev(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection method(string $label = null)
     * @method Show\Field|Collection ip(string $label = null)
     * @method Show\Field|Collection input(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection is_link(string $label = null)
     * @method Show\Field|Collection link(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection url(string $label = null)
     * @method Show\Field|Collection introduce(string $label = null)
     * @method Show\Field|Collection image(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection category_id(string $label = null)
     * @method Show\Field|Collection is_hot(string $label = null)
     * @method Show\Field|Collection hot_image(string $label = null)
     * @method Show\Field|Collection post_id(string $label = null)
     * @method Show\Field|Collection tag_id(string $label = null)
     * @method Show\Field|Collection ip_address(string $label = null)
     * @method Show\Field|Collection user_agent(string $label = null)
     * @method Show\Field|Collection last_activity(string $label = null)
     * @method Show\Field|Collection driver(string $label = null)
     * @method Show\Field|Collection open_id(string $label = null)
     * @method Show\Field|Collection sequence(string $label = null)
     * @method Show\Field|Collection batch_id(string $label = null)
     * @method Show\Field|Collection family_hash(string $label = null)
     * @method Show\Field|Collection should_display_on_index(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection entry_uuid(string $label = null)
     * @method Show\Field|Collection tag(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     * @method Show\Field|Collection profile_photo_path(string $label = null)
     */
    class Show
    {
    }

    /**
     * @method \App\Admin\Extensions\Form\Fee fee(...$params)
     * @method \App\Admin\Extensions\Form\Num num(...$params)
     * @method \App\Admin\Extensions\Form\TableDecimal tableDecimal(...$params)
     * @method \App\Admin\Extensions\Form\Input ipt(...$params)
     * @method \App\Admin\Extensions\Form\ReviewIcon reviewicon(...$params)
     */
    class Form
    {
    }

}

namespace Dcat\Admin\Grid {
    /**
     * @method $this emp(...$params)
     * @method $this fee(...$params)
     * @method $this edit(...$params)
     * @method $this selectplus(...$params)
     * @method $this batch_detail(...$params)
     */
    class Column
    {
    }

    class Filter
    {
    }
}

namespace Dcat\Admin\Show {

    class Field
    {
    }
}

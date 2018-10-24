# coding: utf-8

"""
    StockX API

    PRERELEASE API - Subject to change before release. Provides access to StockX's public services, allowing end users to query for product and order information.  # noqa: E501

    OpenAPI spec version: 1.0.0
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six


class CustomersIdSellingCurrentPaging(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    """

    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'limit': 'int',
        'page': 'int',
        'total': 'str',
        'current_page': 'str'
    }

    attribute_map = {
        'limit': 'limit',
        'page': 'page',
        'total': 'total',
        'current_page': 'currentPage'
    }

    def __init__(self, limit=None, page=None, total=None, current_page=None):  # noqa: E501
        """CustomersIdSellingCurrentPaging - a model defined in Swagger"""  # noqa: E501

        self._limit = None
        self._page = None
        self._total = None
        self._current_page = None
        self.discriminator = None

        self.limit = limit
        self.page = page
        self.total = total
        self.current_page = current_page

    @property
    def limit(self):
        """Gets the limit of this CustomersIdSellingCurrentPaging.  # noqa: E501


        :return: The limit of this CustomersIdSellingCurrentPaging.  # noqa: E501
        :rtype: int
        """
        return self._limit

    @limit.setter
    def limit(self, limit):
        """Sets the limit of this CustomersIdSellingCurrentPaging.


        :param limit: The limit of this CustomersIdSellingCurrentPaging.  # noqa: E501
        :type: int
        """
        if limit is None:
            raise ValueError("Invalid value for `limit`, must not be `None`")  # noqa: E501

        self._limit = limit

    @property
    def page(self):
        """Gets the page of this CustomersIdSellingCurrentPaging.  # noqa: E501


        :return: The page of this CustomersIdSellingCurrentPaging.  # noqa: E501
        :rtype: int
        """
        return self._page

    @page.setter
    def page(self, page):
        """Sets the page of this CustomersIdSellingCurrentPaging.


        :param page: The page of this CustomersIdSellingCurrentPaging.  # noqa: E501
        :type: int
        """
        if page is None:
            raise ValueError("Invalid value for `page`, must not be `None`")  # noqa: E501

        self._page = page

    @property
    def total(self):
        """Gets the total of this CustomersIdSellingCurrentPaging.  # noqa: E501


        :return: The total of this CustomersIdSellingCurrentPaging.  # noqa: E501
        :rtype: str
        """
        return self._total

    @total.setter
    def total(self, total):
        """Sets the total of this CustomersIdSellingCurrentPaging.


        :param total: The total of this CustomersIdSellingCurrentPaging.  # noqa: E501
        :type: str
        """
        if total is None:
            raise ValueError("Invalid value for `total`, must not be `None`")  # noqa: E501

        self._total = total

    @property
    def current_page(self):
        """Gets the current_page of this CustomersIdSellingCurrentPaging.  # noqa: E501


        :return: The current_page of this CustomersIdSellingCurrentPaging.  # noqa: E501
        :rtype: str
        """
        return self._current_page

    @current_page.setter
    def current_page(self, current_page):
        """Sets the current_page of this CustomersIdSellingCurrentPaging.


        :param current_page: The current_page of this CustomersIdSellingCurrentPaging.  # noqa: E501
        :type: str
        """
        if current_page is None:
            raise ValueError("Invalid value for `current_page`, must not be `None`")  # noqa: E501

        self._current_page = current_page

    def to_dict(self):
        """Returns the model properties as a dict"""
        result = {}

        for attr, _ in six.iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """Returns the string representation of the model"""
        return pprint.pformat(self.to_dict())

    def __repr__(self):
        """For `print` and `pprint`"""
        return self.to_str()

    def __eq__(self, other):
        """Returns true if both objects are equal"""
        if not isinstance(other, CustomersIdSellingCurrentPaging):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
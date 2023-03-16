const router = require("express").Router();
const { Food, Dog } = require("../../models");
// const withAuth = require('../../utils/auth');

// CREATE a Food
router.post("/", async (req, res) => {
  try {
    const newFood = await Food.create({
      ...req.body,
    });
    res.status(200).json(newFood);
  } catch (err) {
    res.status(400).json(err);
  }
});

// GET all Foods
router.get("/", async (req, res) => {
  try {
    const foodsData = await Plant.findAll();
    res.status(200).json(foodsData);
  } catch (err) {
    console.log(err);
    res.status(500).json(err);
  }
});

// GET a single Food
router.get("/:id", async (req, res) => {
  try {
    const foodData = await Food.findByPk(req.params.id, {
      include: [
        {
          model: Dog,
        },
      ],
    });
    if (!foodData) {
      res
        .status(404)
        .json({ message: "Sorry about that, no records found for this user." });
      return;
    }
    res.status(200).json(foodData);
  } catch (err) {
    console.log(err);
    res.status(500).json(err);
  }
});

// DELETE a Food
router.delete("/:id", async (req, res) => {
  try {
    const foodData = await Food.destroy({
      where: {
        id: req.params.id,
      },
    });

    if (!foodData) {
      res
        .status(404)
        .json({ message: "Sorry about that, no records found for this User" });
      return;
    }

    res.status(200).json(foodData);
  } catch (err) {
    res.status(500).json(err);
  }
});
module.exports = router;

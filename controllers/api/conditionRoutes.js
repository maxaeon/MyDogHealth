const router = require("express").Router();
const { condition, Dog } = require("../../models");
// const withAuth = require('../../utils/auth');

// CREATE a Condition
router.post("/", async (req, res) => {
  try {
    const newCondition = await Condition.create({
      ...req.body,
    });
    res.status(200).json(newCondition);
  } catch (err) {
    res.status(400).json(err);
  }
});

// GET all Condition
router.get("/", async (req, res) => {
  try {
    const ConditionsData = await Condition.findAll();
    res.status(200).json(ConditionsData);
  } catch (err) {
    console.log(err);
    res.status(500).json(err);
  }
});

// GET a single Condition
router.get("/:id", async (req, res) => {
  try {
    const conditionData = await Condition.findByPk(req.params.id, {
      include: [
        {
          model: Dog,
        },
      ],
    });
    if (!conditionData) {
      res
        .status(404)
        .json({ message: "Sorry about that, no records found for this user." });
      return;
    }
    res.status(200).json(conditionData);
  } catch (err) {
    console.log(err);
    res.status(500).json(err);
  }
});

// DELETE a Condition
router.delete("/:id", async (req, res) => {
  try {
    const conditionData = await Condition.destroy({
      where: {
        id: req.params.id,
      },
    });

    if (!conditionData) {
      res
        .status(404)
        .json({ message: "Sorry about that, no records found for this User" });
      return;
    }

    res.status(200).json(conditionData);
  } catch (err) {
    res.status(500).json(err);
  }
});
module.exports = router;
